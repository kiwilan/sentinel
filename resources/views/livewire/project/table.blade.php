<x-table
  :headers="$headers"
  :items="$models"
>
  @loop($models as $project)
    <x-table.row :href="route('projects.show', ['project_slug' => $project->slug])">
      <x-table.cell :boolean="$project->is_enabled" />
      <x-table.cell>
        {{ $project->name }}
      </x-table.cell>
      <x-table.cell>
        {{ $project->last_log_datetime }}
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
        <div class="flex items-center space-x-2">
          <x-button
            class="relative z-10"
            align="center"
            size="md"
            outlined
          >
            <div class="flex items-center space-x-1">
              <x-icon-pen class="h-4 w-4" />
              <span>Edit</span>
            </div>
          </x-button>
          <x-button
            class="relative z-10"
            color="danger"
            align="center"
            size="md"
            outlined
          >
            <div class="flex items-center space-x-1">
              <x-icon-trash class="h-4 w-4" />
              <span>Delete</span>
            </div>
          </x-button>
        </div>
      </x-table.cell>
    </x-table.row>
  @endloop
</x-table>
