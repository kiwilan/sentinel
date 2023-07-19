<x-stw-listing
  title="Projects"
  subtitle="A selection of projects for all games"
  :sortable="$sortable"
  :sort="$sort"
  :paginate="$models"
  searchable
>
  <x-slot:filters>
    {{-- <livewire:stw-listing.option.filter
      name="states"
      label="States"
      :options="$states"
      :current="$filter['states'] ?? []"
    />
    <livewire:stw-listing.option.filter
      name="armies"
      label="Armies"
      :options="$armies"
      :current="$filter['armies'] ?? []"
    />
    <livewire:stw-listing.option.filter
      name="matters"
      label="Matters"
      :options="$matters"
      :current="$filter['matters'] ?? []"
    />
    <livewire:stw-listing.option.filter
      name="techniques"
      label="Techniques"
      :options="$techniques"
      :current="$filter['techniques'] ?? []"
    />
    <livewire:stw-listing.option.filter
      name="universes"
      label="Universes"
      :options="$universes"
      :current="$filter['universes'] ?? []"
    /> --}}
  </x-slot:filters>

  @loop($models as $model)
    {{ $model->name }}
    {{-- <x-card.miniature :model="$model" /> --}}
  @endloop
</x-stw-listing>
