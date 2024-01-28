<x-app-layout>

    @foreach ($items as $item)
        <x-dashboard.lists-card :item="$item">


        </x-dashboard.lists-card>
    @endforeach

</x-app-layout>
