<x-data.table
  title="Projects"
  :head="$head"
  subtitle="All your projects in one place."
  :empty="$models->isEmpty()"
>
  @loop($models as $project)
    <x-data.row href="{{ route('projects.show', ['project_slug' => $project->slug]) }}">
      <x-data.cell primary>
        {{ $project->name }}
      </x-data.cell>
      <x-data.cell tooltip>
        {{ $project->url }}
      </x-data.cell>
      <x-data.cell code>
        {{ $project->public_key }}
      </x-data.cell>
      <x-data.cell>
        <a href="{{ route('projects.show', ['project_slug' => $project->slug]) }}">
          Logs
        </a>
      </x-data.cell>
    </x-data.row>
  @endloop
</x-data.table>
