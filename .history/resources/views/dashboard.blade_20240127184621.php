<x-app-layout>

    @foreach ($items as $item)
        <x-dashboard.lists-card :item="$item">
            <x-dashboard.list-item itemTitle="Tracking ID" />

        </x-dashboard.lists-card>
    @endforeach

</x-app-layout>
