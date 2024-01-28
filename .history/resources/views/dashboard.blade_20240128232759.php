<x-app-layout>

    @foreach ($items as $item)
        <x-dashboard.lists-card :item="$item">
    @endforeach

</x-app-layout>
