@props(['work'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$work->employer"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $work->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{ $work->url }}" target="_blank">
                {{ $work->title }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $work->schedule }} - {{ $work->salary }}</p>
    </div>

    <div>
        @foreach ($work->tags as $tag)
        <x-tag :$tag />
        @endforeach
    </div>

</x-panel>
