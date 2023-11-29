<x-layout>
    <x-slot:title>
        Custom Title
    </x-slot>
 
    @foreach ($tasks as $task)
        {{ $task }}
    @endforeach
</x-layout>

<!--https://laravel.com/docs/10.x/blade#layouts-using-template-inheritance-->