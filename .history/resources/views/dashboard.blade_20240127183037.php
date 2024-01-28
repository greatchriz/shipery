<x-app-layout>

    @foreach ($items as $item)
        <x-dashboard.list-item :item="$item" />
    @endforeach

</x-app-layout>
