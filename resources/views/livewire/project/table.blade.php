<x-table
  :headers="$headers"
  :items="$models"
>
  @loop($models as $project)
    <x-table.row :href="route('projects.show', ['project_slug' => $project->slug])">
      <x-table.cell>
        {{ $project->name }}
      </x-table.cell>
      <x-table.cell>
        {{ $project->url }}
      </x-table.cell>
      <x-table.cell>
        {{ $project->instance }}
      </x-table.cell>
      <x-table.cell>
        {{ $project->type->locale() }}
      </x-table.cell>
      <x-table.cell>
        {{ $project->priority->locale() }}
      </x-table.cell>
      <x-table.cell :boolean="$project->is_enabled" />
    </x-table.row>
  @endloop
</x-table>
