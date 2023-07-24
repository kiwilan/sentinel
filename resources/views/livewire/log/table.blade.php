<x-data.table
  title="Logs"
  :head="$head"
  :empty="$models->isEmpty()"
  subtitle="All your logs in one place."
>
  <x-slot name="item">
    <div class="italic text-gray-500">Auto-fetch enabled</div>
  </x-slot>
  @loop($models as $log)
    <x-data.row
      href="{{ route('logs.show', [
          'project_slug' => $log->project->slug,
          'log_id' => $log->id,
      ]) }}"
    >
      <x-data.cell
        full
        :tooltip="$log->date_time->format('Y-m-d H:i:s')"
      >
        {{ $log->from_date_time }}
      </x-data.cell>
      <x-data.cell response="lg">
        {{ $log->app }}
      </x-data.cell>
      <x-data.cell>
        <span class="{{ $log->is_production ? 'text-red-500' : '' }}">{{ $log->env }}</span>
      </x-data.cell>
      <x-data.cell>
        {{ $log->message }}
      </x-data.cell>
      <x-data.cell mono>
        {{ $log->method }}
      </x-data.cell>
      <x-data.cell mono>
        {{ $log->url }}
      </x-data.cell>
    </x-data.row>
  @endloop
</x-data.table>
