<x-layout>

    <x-slot:title>
        {{ $job['title']}}
    </x-slot:heading>
    
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

</x-layout>