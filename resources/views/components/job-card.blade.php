@props(['work'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $work->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{ $work->title }}</h3>
        <p class="text-sm mt-4">{{ $work->contract }} - {{ $work->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($work->tags as $tag)
            <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42" :height="42" />
    </div>
</x-panel>