{{-- <x-table
  title="Logs"
  :head="$head"
  :empty="$models->isEmpty()"
  subtitle="All your logs in one place."
>
  <x-slot name="item">
    <div class="italic text-gray-500">Auto-fetch enabled</div>
  </x-slot>
  @loop($models as $log)
    <x-table.row
      href="{{ route('logs.show', [
          'project_slug' => $log->project->slug,
          'log_id' => $log->id,
      ]) }}"
    >

    </x-table.row>
  @endloop
</x-table> --}}


<x-table
  :headers="$headers"
  :items="$models"
>
  @loop($models as $log)
    <x-table.row :href="route('logs.show', [
        'project_slug' => $log->project->slug,
        'log_id' => $log->id,
    ])">
      <x-table.cell
        full
        :tooltip="$log->datetime->format('Y-m-d H:i:s')"
      >
        {{ $log->from_datetime }}
      </x-table.cell>
      <x-table.cell response="lg">
        {{ $log->app }}
      </x-table.cell>
      <x-table.cell>
        <span class="{{ $log->is_production ? 'text-red-500' : '' }}">{{ $log->env }}</span>
      </x-table.cell>
      <x-table.cell>
        {{ $log->message }}
      </x-table.cell>
      <x-table.cell mono>
        {{ $log->method }}
      </x-table.cell>
      <x-table.cell mono>
        {{ $log->url }}
      </x-table.cell>
    </x-table.row>
  @endloop
</x-table>
