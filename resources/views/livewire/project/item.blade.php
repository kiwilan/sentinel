@php
  $dlItemClass = 'border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0';
  $dlItemTitleClass = 'text-sm font-medium leading-6 text-gray-900';
  $dlItemDescriptionClass = 'mt-1 text-sm leading-6 text-gray-700 sm:mt-2';

  $items = [
      'Enabled' => $project->is_enabled ? 'Yes' : 'No',
      'URL' => $project->url,
      'Type' => $project->type->locale(),
      'Priority' => $project->priority->locale(),
  ];
@endphp

<section
  class="group space-y-5 rounded-md bg-white shadow"
  x-data="{
      expanded: @entangle('expanded'),
      editable: @entangle('editable')
  }"
>
  <div
    class="relative w-full cursor-pointer space-y-3 rounded-md p-5 hover:bg-gray-50 md:flex md:items-center md:justify-between md:space-y-0"
  >
    <div>
      <h2 class="text-xl font-semibold">{{ $project->name }}</h2>
      <p class="mt-1 font-mono text-sm text-gray-500">
        {{ $project->subtitle }}
      </p>
    </div>
    <div class="relative z-10 flex cursor-auto items-center space-x-5">
      <div @class([
          'rounded-full p-1.5 bg-opacity-30',
          'bg-green-300' => $is_enabled,
          'bg-red-300' => !$is_enabled,
      ])>
        <x-icon-power @class([
            'h-6 w-6',
            'text-green-600' => $is_enabled,
            'text-red-600' => !$is_enabled,
        ]) />
      </div>
      <x-input-toggle
        name="is_enabled"
        label="Enabled"
        subtitle="Enable Sentinel for this project."
        wire:model="is_enabled"
      />
    </div>
    <x-icon-collapse class="h-8 w-8 text-gray-500" />
    <div
      class="absolute inset-0 z-0"
      @click="expanded = ! expanded"
    ></div>
  </div>

  <div
    class="p-5"
    x-show="expanded"
    x-collapse
    x-cloak
  >
    <dl class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @loop($items as $name => $value)
        <div class="{{ $dlItemClass }}">
          <dt class="{{ $dlItemTitleClass }}">{{ $name }}</dt>
          <dd class="{{ $dlItemDescriptionClass }}">{{ $value }}</dd>
        </div>
      @endloop
      <div class="{{ $dlItemClass }} md:col-span-4">
        <dt class="{{ $dlItemTitleClass }}">Comment</dt>
        <dd class="{{ $dlItemDescriptionClass }}">{{ $project->comment }}</dd>
      </div>
    </dl>
  </div>

  <div
    class="items-start justify-between space-y-3 bg-white p-5 md:flex md:space-y-0"
    x-show="expanded"
    x-collapse
    x-cloak
  >
    <div>
      <x-button
        type="button"
        @click="editable = ! editable"
      >
        Edit
      </x-button>
    </div>
    <div class="items-center space-x-3 md:flex">
      <button
        class="flex items-center justify-between rounded-md bg-gray-200 p-2 hover:bg-gray-100 md:w-[23.5rem]"
        x-data="copy"
        @click="clipboard(`{{ $project->public_key }}`)"
      >
        <div>{{ $project->public_key }}</div>
        <x-icon-clipboard class="inline-block h-5 w-5" />
      </button>
      <x-button
        type="button"
        wire:click="regenerateToken"
      >
        Regenerate
      </x-button>
    </div>
  </div>
  <form
    class="m-5 rounded-md border p-5"
    x-show="editable"
    x-collapse
    x-cloak
  >
    <div class="space-y-6 divide-y">
      <div class="grid grid-cols-3 gap-10">
        <x-input-text
          name="name"
          type="text"
          :label="__('Name')"
          placeholder="My application"
          wire:model="name"
          required
        />
        <x-input-text
          name="url"
          type="text"
          :label="__('URL')"
          placeholder="https://example.com"
          wire:model="url"
          required
        />
        <x-input-text
          name="subtitle"
          type="text"
          :label="__('Subtitle')"
          placeholder="A small subtitle"
          wire:model="subtitle"
        />
        <x-select
          name="type"
          label="Type"
          wire:model="type"
          placeholder="Select a type"
          :options="$typeOptions"
        />
        <x-select
          name="priority"
          label="Priority"
          wire:model="priority"
          placeholder="Select a priority"
          :options="$priorityOptions"
        />
        <x-input-text
          class="col-span-2"
          name="comment"
          type="text"
          :label="__('Comment')"
          placeholder="About this application"
          wire:model="comment"
          multiline
        />
        <div class="col-span-1"></div>
        <div class="col-span-1 space-y-6">
          <x-input-toggle
            name="with_notifications"
            label="With notifications"
            subtitle="Enable Sentinel notifications for this project."
            wire:model="with_notifications"
          />
          @if ($with_notifications)
            <x-input-toggle
              name="use_discord"
              label="Use Discord"
              subtitle="Enable notifications on Discord."
              wire:model="use_discord"
            />
            <x-input-toggle
              name="use_slack"
              label="Use Slack"
              subtitle="Enable notifications on Slack."
              wire:model="use_slack"
            />
            <x-input-toggle
              name="use_mail"
              label="Use mail"
              subtitle="Enable notifications on mail."
              wire:model="use_mail"
              :checked="$use_slack"
            />
          @endif
        </div>
      </div>
      @if ($with_notifications)
        <div class="space-y-5 pt-6">
          @if ($use_discord)
            <div>
              <x-input-text
                class="col-span-2"
                name="discord_token"
                type="text"
                :label="__('Discord token')"
                placeholder="000000000000000000:aBcDeFgHiJkLmNoPqRsTuVwXyZ..."
                wire:model="discord_token"
                :required="$use_discord"
              >
                With this format: <code>ID:TOKEN</code>, to know more check <a
                  class="underline decoration-dashed"
                  href="https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks"
                  target="_blank"
                  rel="noopener noreferrer"
                >official documentation</a>.
              </x-input-text>
              <p class="mt-1 font-mono text-sm text-gray-500">
                @php
                  $discordToken = str_replace(':', '/', $discord_token);
                @endphp
                https://discord.com/api/webhooks/{{ $discordToken }}
              </p>
            </div>
          @endif
          @if ($use_slack)
            <div>
              <x-input-text
                class="col-span-2"
                name="slack_token"
                type="text"
                :label="__('Slack token')"
                placeholder="T00000000:B00000000:XXXXXXXXXXXXXXXXXXXXXXXX"
                wire:model="slack_token"
                :required="$use_slack"
              >
                With this format: <code>ID:TOKEN:CHANNEL</code>, to know check <a
                  class="underline decoration-dashed"
                  href="https://api.slack.com/messaging/webhooks#enable_webhooks"
                  target="_blank"
                  rel="noopener noreferrer"
                >official documentation</a>.
              </x-input-text>
              <p class="mt-1 font-mono text-sm text-gray-500">
                @php
                  $slackToken = str_replace(':', '/', $slack_token);
                @endphp
                https://hooks.slack.com/services/{{ $slackToken }}
              </p>
            </div>
          @endif
          @if ($use_mail)
            <x-input-text
              class="col-span-2"
              name="mail_token"
              type="text"
              :label="__('Email')"
              placeholder="notif@example.com"
              wire:model="mail_token"
              :required="$use_mail"
            >
              The sender is configured into Sentinel environnement file.
            </x-input-text>
          @endif
        </div>
      @endif
    </div>
    <div class="mt-5 flex">
      <x-button
        class="ml-auto"
        type="button"
        wire:click="save"
      >
        Save
      </x-button>
    </div>
  </form>
</section>
