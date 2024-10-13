<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Company</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Title</h3>
        <p class="text-sm mt-4">Contract - Salary</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Manager</x-tag>
        </div>

        <x-employer-logo :width="42" :height="42" />
    </div>
</x-panel>