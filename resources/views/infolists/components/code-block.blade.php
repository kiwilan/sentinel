<div class="overflow-auto font-mono">
  @if (is_array($getState()))
    <div class="space-y-1">
      @foreach ($getState() as $line)
        <div>{{ $line }}</div>
      @endforeach
    </div>
  @else
    {{ $getState() }}
  @endif
</div>
