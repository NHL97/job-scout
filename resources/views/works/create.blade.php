<x-layout>
    <x-page-heading>New Jobs</x-page-heading>

    <x-forms.form method="POST" action="/works">
        <x-forms.input label="Title" name="title" placeholder="CFO"/>
        <x-forms.input label="Salary" name="salary" placeholder="50,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://job-scout.com/works/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Extra Cost)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="video, developer, education"/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
