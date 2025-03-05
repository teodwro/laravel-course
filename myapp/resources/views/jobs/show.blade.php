<x-layout>
    <x-slot:title>
        Job
    </x-slot:title>

    <x-slot:heading>
        Job: {{ $job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
        The employer is {{ $job->employer->name }}
    </p>

    <div class="mt-6 flex space-x-4">
        <a href="/jobs/{{ $job->id }}/edit">
            <button type="button"
                class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 cursor-pointer">
                Edit Job
            </button>
        </a>

        <form action="/jobs/{{ $job->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2 cursor-pointer">
                Delete Job
            </button>
        </form>
    </div>
</x-layout>
