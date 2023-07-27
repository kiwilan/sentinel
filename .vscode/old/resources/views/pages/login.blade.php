<x-guest-layout>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img
        class="mx-auto h-10 w-auto"
        src="https://tailwindui.com/img/logos/mark.svg?color=primary&shade=500"
        alt="Your Company"
      >
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form
        class="space-y-6"
        action="#"
        method="POST"
      >
        <div>
          <label
            class="block text-sm font-medium leading-6 text-white"
            for="email"
          >Email address</label>
          <div class="mt-2">
            <input
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary-500 sm:text-sm sm:leading-6"
              id="email"
              name="email"
              type="email"
              autocomplete="email"
              required
            >
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label
              class="block text-sm font-medium leading-6 text-white"
              for="password"
            >Password</label>
            <div class="text-sm">
              <a
                class="font-semibold text-primary-400 hover:text-primary-300"
                href="#"
              >Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-primary-500 sm:text-sm sm:leading-6"
              id="password"
              name="password"
              type="password"
              autocomplete="current-password"
              required
            >
          </div>
        </div>

        <div>
          <button
            class="flex w-full justify-center rounded-md bg-primary-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500"
            type="submit"
          >Sign in</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-400">
        Not a member?
        <a
          class="font-semibold leading-6 text-primary-400 hover:text-primary-300"
          href="#"
        >Start a 14 day free trial</a>
      </p>
    </div>
  </div>
</x-guest-layout>
