@php
  $isDev = config('app.env') === 'local';
  $email = config('app.admin.email');
  $password = config('app.admin.password');
@endphp

<x-app>
  <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <x-logo
        class="mx-auto w-12"
        :text="false"
      />
      <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight">
        Sign in to Sentinel
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form
        class="space-y-6"
        method="POST"
        action="{{ route('login') }}"
      >
        @csrf

        <x-form.validation-errors class="mb-4" />

        <x-field.text
          name="email"
          type="email"
          :label="__('Email')"
          autocomplete="email"
          placeholder="user@example.com"
          :value="$isDev ? $email : old('email')"
          autofocus
          required
        />

        <x-field.text
          name="password"
          type="password"
          :label="__('Password')"
          :value="$isDev ? $password : old('password')"
          autocomplete="current-password"
          required
        />

        <x-field.checkbox
          name="remember"
          label="Remember me"
          :checked="$isDev"
        />

        <div>
          @if (Route::has('password.request'))
            <a
              class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
              href="{{ route('password.request') }}"
            >
              {{ __('Forgot your password?') }}
            </a>
          @endif

          <x-button
            class="mt-4"
            type="submit"
            full
          >
            Sign in
          </x-button>
        </div>
      </form>
    </div>
  </div>
</x-app>
