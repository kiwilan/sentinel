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
        <div
          class="flex items-center space-x-2"
          x-data="{
              deleteProject(e) {
                  e.preventDefault();
                  e.stopPropagation();
                  this.$wire.$set('opened', true)
                  this.$wire.$set('toDelete', {{ $project }})
              }
          }"
        >
          <x-button
            class="relative z-10"
            href="{{ route('projects.edit', ['project_slug' => $project->slug]) }}"
            align="center"
            size="md"
            outlined
          >
            <div class="flex items-center space-x-1">
              <x-icon-pen class="h-4 w-4" />
              <span>Edit</span>
            </div>
          </x-button>
          {{-- <x-button
            class="relative z-10"
            color="danger"
            align="center"
            size="md"
            outlined
            @click="deleteProject"
          >
            <div class="flex items-center space-x-1">
              <x-icon-trash class="h-4 w-4" />
              <span>Delete</span>
            </div>
          </x-button> --}}
        </div>
      </x-table.cell>
    </x-table.row>
  @endloop
</x-table>
