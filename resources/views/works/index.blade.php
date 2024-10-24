<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Find your dream job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer...."
                    class="bg-white/10 border-white/10 px-5 py-4 w-full max-w-xl mx-auto border border-gray-300 rounded-xl focus:outline-none focus:border-blue-800">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredWorks as $work)
                <x-job-card :$work />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 ">
                @foreach ($tags as $tag)
                <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($works as $work)
                <x-job-card-wide :$work />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>