<x-layout>
    <div class="space-y-8">
        <section>
            <x-section-heading >Top Jobs</x-section-heading >
            <div class= "grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>

        <section>
            <x-section-heading >Tags</x-section-heading >
            <div class="mt-6 mb-6 space-x-1 space-y-5">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading >Recent Jobs</x-section-heading >

        </section>
    </div>

</x-layout>