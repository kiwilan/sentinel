<?php

use Filament\Notifications\Notification;
use function Livewire\Volt\computed;
use function Livewire\Volt\state;
use function Livewire\Volt\on;

state(['project', 'opened']);

$is_enabled = computed(fn() => $this->project->is_enabled);
$toggle = function () {
    $this->project->is_enabled = !$this->project->is_enabled;
    $this->project->save();
    $body = $this->project->is_enabled ? "{$this->project->name} will now receive logs." : "{$this->project->name} will not receive any logs now.";

    Notification::make()
        ->title($this->project->is_enabled ? 'Project enabled' : 'Project disabled')
        ->icon($this->project->is_enabled ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
        ->iconColor($this->project->is_enabled ? 'success' : 'danger')
        ->body($body)
        ->send();
};

$deleteLogs = function () {
    $this->project->logs()->delete();
    $this->opened = false;
    // $this->dispatch('logs-fetch');
    Notification::make()
        ->title('Logs deleted')
        ->icon('heroicon-o-trash')
        ->iconColor('danger')
        ->body("All logs from {$this->project->name} were deleted.")
        ->send();
};

$confirmProject = function () {
    $this->opened = true;
};

on([
    'delete-project' => function () {
        $this->project->delete();
        $this->dispatch('table-fetch');
        Notification::make()
            ->title('Project deleted')
            ->icon('heroicon-o-trash')
            ->iconColor('danger')
            ->send();
    },
]);

$deleteProject = function () {
    $this->opened = false;
    $this->dispatch('delete-project');

    return $this->redirect('/projects');
};
?>

<header class="relative isolate mt-6">
  <div
    class="absolute inset-0 -z-10 overflow-hidden"
    aria-hidden="true"
  >
    <div class="absolute left-16 top-full -mt-16 transform-gpu opacity-50 blur-3xl xl:left-1/2 xl:-ml-80">
      <div
        class="aspect-[1154/678] w-[72.125rem] bg-gradient-to-br from-[#FF80B5] to-[#9089FC]"
        style="clip-path: polygon(100% 38.5%, 82.6% 100%, 60.2% 37.7%, 52.4% 32.1%, 47.5% 41.8%, 45.2% 65.6%, 27.5% 23.4%, 0.1% 35.3%, 17.9% 0%, 27.7% 23.4%, 76.2% 2.5%, 74.2% 56%, 100% 38.5%)"
      ></div>
    </div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gray-900/5"></div>
  </div>

  <div class="mx-auto px-4 py-10 sm:px-6 lg:px-8">
    <div class="mx-auto flex max-w-2xl items-center justify-between gap-x-8 lg:mx-0 lg:max-w-none">
      <div class="flex items-center gap-x-6">
        <button
          @class([
              'rounded-full p-1.5 bg-opacity-30',
              'bg-green-300' => $this->is_enabled,
              'bg-red-300' => !$this->is_enabled,
          ])
          wire:click="toggle"
        >
          <x-icon-power @class([
              'h-6 w-6',
              'text-green-600' => $this->is_enabled,
              'text-red-600' => !$this->is_enabled,
          ]) />
        </button>
        <h1>
          <div class="text-gray-medium text-sm leading-6">
            {{ $project->instance }}
          </div>
          <div class="text-gray-light mt-1 text-base font-semibold leading-6">
            {{ $project->name }}
          </div>
        </h1>
      </div>
      <div class="flex items-center gap-x-4 sm:gap-x-6">
        <x-button href="{{ route('projects.edit', ['project_slug' => $project->slug]) }}">
          Edit
        </x-button>
        <x-button
          color="secondary"
          outlined
          x-data="copy"
          @click="clipboard(`{{ $project->key }}`)"
        >
          Copy token
        </x-button>
        <x-button
          color="danger"
          outlined
          wire:click="deleteLogs"
        >
          Delete all logs
        </x-button>
        <x-button
          class="relative z-10"
          color="danger"
          align="center"
          outlined
          wire:click="confirmProject"
        >
          <div class="flex items-center space-x-1">
            <x-icon-trash class="h-4 w-4" />
            <span>Delete</span>
          </div>
        </x-button>
      </div>
    </div>
    <div class="text-gray-medium mt-3 text-sm">
      {{ $project->comment }}
    </div>
  </div>

  @teleport('body')
    <x-modal
      wire:model="opened"
      maxWidth="md"
    >
      <div class="p-5">
        <div>
          Do you want really delete project?
        </div>
        <x-button
          class="mt-3"
          color="danger"
          outlined
          wire:click="deleteProject"
          align="center"
        >
          Delete project
        </x-button>
      </div>
    </x-modal>
  @endteleport
</header>
