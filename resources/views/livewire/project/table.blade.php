<x-data.table
  title="Projects"
  :head="$head"
  subtitle="All your projects in one place."
  :empty="$models->isEmpty()"
>
  <x-slot name="action">
    <x-button wire:click="$emit('projectFormOpen')">
      Create
    </x-button>
  </x-slot>
  <livewire:project.form />
  @loop($models as $project)
    <x-data.row href="{{ route('projects.show', ['project_slug' => $project->slug]) }}">
      <x-data.cell primary>
        {{ $project->name }}
      </x-data.cell>
      <x-data.cell>
        {{ $project->url }}
      </x-data.cell>
      <x-data.cell>
        {{ $project->instance }}
      </x-data.cell>
      <x-data.cell>
        {{ $project->type->locale() }}
      </x-data.cell>
      <x-data.cell>
        {{ $project->priority->locale() }}
      </x-data.cell>
      <x-data.cell>
        @if ($project->is_enabled)
          <x-icon-check class="h-5 w-5 text-green-500" />
        @else
          <x-icon-x class="h-5 w-5 text-red-500" />
        @endif
      </x-data.cell>
    </x-data.row>
  @endloop
</x-data.table>
