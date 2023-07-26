<form
  id="project-form"
  name="project-form"
  wire:submit.prevent="submit"
  x-data
>
  <div class="space-y-8 px-6 pt-5">
    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
      <div>
        <h2 class="text-gray-light text-base font-semibold leading-7">Application</h2>
        <p class="text-gray-medium mt-1 text-sm leading-6">This information about your application.</p>
      </div>

      <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
        <x-input-text
          class="sm:col-span-4"
          name="name"
          type="text"
          :label="__('Name')"
          placeholder="My application"
          hint="Name of your application."
          wire:model="name"
          required
        />
        <x-input-text
          class="sm:col-span-4"
          name="url"
          type="text"
          :label="__('URL')"
          placeholder="https://example.com"
          wire:model="url"
          required
        />
        <x-input-text
          class="sm:col-span-4"
          name="instance"
          type="text"
          :label="__('Instance')"
          hint="Like `local`, `staging`, `production`"
          placeholder="About this application instance"
          wire:model="instance"
        />
        <x-select
          class="sm:col-span-4"
          name="type"
          label="Type"
          wire:model="type"
          placeholder="Select a type"
          :options="$typeOptions"
          required
        />
        <x-select
          class="sm:col-span-4"
          name="priority"
          label="Priority"
          wire:model="priority"
          placeholder="Select a priority"
          default="medium"
          :options="$priorityOptions"
          required
        />
        <x-input-text
          class="col-span-full"
          name="comment"
          type="text"
          :label="__('Comment')"
          placeholder="About this application"
          wire:model="comment"
          multiline
        />
      </div>
    </div>

    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 md:grid-cols-3">
      <div>
        <h2 class="text-gray-light text-base font-semibold leading-7">Notifications</h2>
        <p class="text-gray-medium mt-1 text-sm leading-6">How do you want to be notified?</p>
      </div>

      <div class="max-w-2xl space-y-10 md:col-span-2">
        <x-toggle
          name="with_notifications"
          label="With notifications"
          subtitle="Enable Sentinel notifications for this project."
          wire:model="with_notifications"
        />
        @if ($with_notifications)
          <x-toggle
            name="use_discord"
            label="Use Discord"
            subtitle="Enable notifications on Discord."
            wire:model="use_discord"
          />
          <x-toggle
            name="use_slack"
            label="Use Slack"
            subtitle="Enable notifications on Slack."
            wire:model="use_slack"
          />
          <x-toggle
            name="use_mail"
            label="Use mail"
            subtitle="Enable notifications on mail."
            wire:model="use_mail"
          />
        @endif
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
                <p class="text-gray-medium mt-1 font-mono text-sm">
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
                <p class="text-gray-medium mt-1 font-mono text-sm">
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
    </div>
  </div>
  <div class="fixed bottom-0 right-0 z-10 w-full border-t border-gray-700 bg-gray-900/50 px-5 py-5">
    <div class="main-container flex items-center justify-end space-x-3">
      <x-button
        href="{{ url()->previous() }}"
        size="2xl"
        outlined
      >
        Cancel
      </x-button>
      <x-button
        form="project-form"
        type="submit"
        size="2xl"
      >
        Save
      </x-button>
    </div>
  </div>
</form>
