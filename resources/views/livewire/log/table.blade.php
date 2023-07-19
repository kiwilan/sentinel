<x-data.table
  title="Logs"
  :head="$head"
  :empty="$models->isEmpty()"
  subtitle="All your logs in one place."
>
  @loop($models as $log)
    <x-data.row href="{{ route('logs.show', ['log_id' => $log->id]) }}">
      <x-data.cell primary>
        {{ $log->date_time }}
      </x-data.cell>
      <x-data.cell>
        <span class="{{ $log->is_production ? 'text-red-500' : '' }}">{{ $log->env }}</span>
      </x-data.cell>
      <x-data.cell
        code
        tooltip
        :tooltip-limit="60"
      >
        {{ $log->report?->message }}
      </x-data.cell>
      <x-data.cell code>
        {{ $log->method }} {{ $log->url }}
      </x-data.cell>
      <x-data.cell>
        Details
      </x-data.cell>
    </x-data.row>
  @endloop
</x-data.table>
