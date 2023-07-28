<?php

use function Livewire\Volt\{state, mount};
use Illuminate\Support\Carbon;

state(['labels', 'values']);

$fetch = function () {
    $chart = \App\Services\StatisticService::make()->lastYear('logs');
    $this->labels = $chart->labelsJs();
    $this->values = $chart->valuesJs();
};

mount(function () {
    $this->fetch();
});

?>

<div>
  @pushOnce('scripts')
    <!-- https://www.chartjs.org/ -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
  @endPushOnce

  <div
    class="w-full"
    x-data="{
        labels: {{ $labels }},
        values: {{ $values }},
        chart: null,
        init() {
            this.createChart()
    
            this.$watch('values', () => {
                if (this.chart) {
                    this.chart.data.labels = this.labels
                    this.chart.data.datasets[0].data = this.values
                    this.chart.update()
                }
            })
        },
        createChart() {
            this.chart = new Chart(this.$refs.canvas.getContext('2d'), {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets: [{
                        data: this.values,
                        backgroundColor: '#77C1D2',
                        borderColor: '#77C1D2',
                    }],
                },
                options: {
                    interaction: { intersect: false },
                    scales: { y: { beginAtZero: true } },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            displayColors: false,
                            callbacks: {
                                label(point) {
                                    return `${point.raw} logs`
                                }
                            }
                        }
                    }
                }
            })
        }
    }"
  >
    <canvas
      class="rounded-lg bg-white p-8 dark:bg-gray-800"
      x-ref="canvas"
    ></canvas>
  </div>
</div>
