<section class="space-y-6 rounded-md bg-white p-5">
  <div class="flex items-center justify-between">
    <div>
      <h2 class="text-xl font-semibold">{{ $project->name }}</h2>
      <div class="mt-3 font-mono text-gray-500">
        {{ $project->url }}
      </div>
      <p>
        {{ $project->type->locale() }}
      </p>
      <p>
        {{ $project->instance }}
      </p>
      <p>
        {{ $project->comment }}
      </p>
    </div>
    <div class="flex items-center space-x-3">
      <div
        class="w-[24rem] rounded-md bg-gray-200 p-2 hover:bg-gray-100"
        x-data="copy"
      >
        <button
          class="flex w-full items-center justify-between"
          @click="clipboard(`{{ $project->public_key }}`)"
        >
          <div>{{ $project->public_key }}</div>
          <x-icon-clipboard class="inline-block h-5 w-5" />
        </button>
      </div>
      <x-button
        type="button"
        wire:click="regenerateToken"
      >
        Regenerate
      </x-button>
    </div>
  </div>
  <div x-data="{ expanded: false }">
    <x-button
      type="button"
      @click="expanded = ! expanded"
    >
      Edit
    </x-button>
    <form
      class="mt-5 rounded-md border p-5"
      x-show="expanded"
      x-collapse
      x-cloak
      wire:submit="save"
    >
      <div class="space-y-6 divide-y">
        <div class="grid grid-cols-2 gap-10">
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
            class="col-span-2"
            name="comment"
            type="text"
            :label="__('Comment')"
            placeholder="About this application"
            wire:model="comment"
            multiline
          />
          <x-input-toggle
            name="is_enabled"
            label="Enabled"
            subtitle="Enable Sentinel for this project."
            wire:model="is_enabled"
          />
          <x-input-toggle
            name="with_notifications"
            label="With notifications"
            subtitle="Enable Sentinel notifications for this project."
            wire:model="with_notifications"
          />
        </div>
        <div class="grid grid-cols-3 gap-6 pt-6">
          <div class="col-span-2"></div>
          @if ($with_notifications)
            <div class="col-span-3 grid grid-cols-2 gap-6">
              <div class="space-y-6">
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
              </div>
              <div class="space-y-6">
                @if ($use_discord)
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
                    >official documentation</a>
                  </x-input-text>
                @else
                  <div class="col-span-2"></div>
                @endif
                @if ($use_slack)
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
                    >official documentation</a>
                  </x-input-text>
                @else
                  <div class="col-span-2"></div>
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
                @else
                  <div class="col-span-2"></div>
                @endif
              </div>
            </div>
          @endif
        </div>
      </div>
      <div class="flex">
        <x-button
          class="ml-auto"
          type="submit"
        >
          Save
        </x-button>
      </div>
    </form>
  </div>
</section>
