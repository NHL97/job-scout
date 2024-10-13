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
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 space-y-4">
                <x-tag>Backend</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Api</x-tag>
                <x-tag>Manager</x-tag>
                <x-tag>Accountant</x-tag>
                <x-tag>Web Developer</x-tag>
                <x-tag>Software Engineer</x-tag>
                <x-tag>Admin Assistant</x-tag>
                <x-tag>Secretary</x-tag>
                <x-tag>Human Resources Assistant</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>Cloud Computing</x-tag>
                <x-tag>App Developer</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>