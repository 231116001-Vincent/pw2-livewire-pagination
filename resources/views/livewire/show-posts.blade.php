<div>
    <div class="flex flex-col space-y-4">
        @forelse ($data as $row)
            <a href="/posts/{{ $row->id }}">
                <div class="p-4 rounded-lg transition-shadow hover:shadow-md bg-gray-100">
                    <span class="font-medium">{{ $row->title }}</span>
                    <p class="text-gray-400">{{ $row->excerpt }}</p>
                </div>
            </a>
        @empty
            <p>Empty</p>
        @endforelse
    </div>

    {{ $data->links(data: ['scrollTo' => false]) }}
</div>
