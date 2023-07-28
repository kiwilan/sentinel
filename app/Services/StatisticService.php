<?php

namespace App\Services;

use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StatisticService
{
    public static function make(): self
    {
        return new self();
    }

    public function lastYear(string $table, string $field = 'created_at', string $id = 'id'): StatisticItem
    {
        $from = Carbon::now()->endOfDay();
        $to = Carbon::now()->subYear()->startOfDay();

        $data = DB::table($table)
            ->selectRaw("
                count($id) as total,
                date_format($field, '%b %Y') as period
            ")
            ->whereBetween('created_at', [$to, $from])
            ->groupBy('period')
            ->get()
            ->keyBy('period')
        ;

        $periods = collect([]);

        foreach (CarbonPeriod::create($to, '1 month', $from) as $period) {
            $periods->push($period->format('M Y'));
        }

        $labels = $periods;
        $values = $periods->map(fn ($period) => $data->get($period)->total ?? 0);

        return StatisticItem::make($labels->toArray(), $values->toArray());
    }
}

class StatisticItem
{
    /**
     * @param  string[]  $labels
     * @param  int[]|float[]  $values
     */
    protected function __construct(
        protected array $labels = [],
        protected array $values = [],
    ) {
    }

    /**
     * @param  string[]  $labels
     * @param  int[]|float[]  $values
     */
    public static function make(array $labels = [], array $values = []): self
    {
        return new self($labels, $values);
    }

    /**
     * @return string[]
     */
    public function labels(): array
    {
        return $this->labels;
    }

    /**
     * @return int[]|float[]
     */
    public function values(): array
    {
        return $this->values;
    }

    public function labelsJs(): string
    {
        return json_encode($this->labels);
    }

    public function valuesJs(): string
    {
        return json_encode($this->values);
    }
}
