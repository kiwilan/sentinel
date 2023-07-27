<table class="mt-6 w-full whitespace-nowrap text-left">
  <thead class="border-b border-white/10 text-sm leading-6 text-white">
    <tr>
      @loop($headers as $name)
        <th
          class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8"
          scope="col"
        >{{ $name }}</th>
      @endloop
    </tr>
  </thead>
  <tbody class="divide-y divide-white/5">
    @loop($items as $item)
      <tr>
        @loop($headers as $field => $name)
          <td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
            {{ $item->{$field} }}
          </td>
        @endloop
        {{-- <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
        <div class="flex items-center gap-x-4">
          <img
            class="h-8 w-8 rounded-full bg-gray-800"
            src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt=""
          >
          <div class="truncate text-sm font-medium leading-6 text-white">Michael Foster</div>
        </div>
      </td>
      <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
        <div class="flex gap-x-3">
          <div class="font-mono text-sm leading-6 text-gray-400">2d89f0c8</div>
          <span
            class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-gray-400/20"
          >main</span>
        </div>
      </td>
      <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
        <div class="flex items-center justify-end gap-x-2 sm:justify-start">
          <time
            class="text-gray-400 sm:hidden"
            datetime="2023-01-23T11:00"
          >45 minutes ago</time>
          <div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
            <div class="h-1.5 w-1.5 rounded-full bg-current"></div>
          </div>
          <div class="hidden text-white sm:block">Completed</div>
        </div>
      </td>
      <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">25s</td>
      <td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
        <time datetime="2023-01-23T11:00">45 minutes ago</time>
      </td> --}}
      </tr>
    @endloop
  </tbody>
</table>
