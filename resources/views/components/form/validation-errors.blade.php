@if ($errors->any())
  <div {{ $attributes }}>
    <div class="font-medium text-red-600 dark:text-red-400">{{ __('Whoops! Something went wrong.') }}</div>

    <ul class="mt-3 list-inside list-disc text-sm text-red-600 dark:text-red-400">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if (session('status'))
  <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
    {{ session('status') }}
  </div>
@endif
