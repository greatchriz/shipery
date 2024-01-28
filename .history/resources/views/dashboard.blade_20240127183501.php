<x-app-layout>

    @foreach ($items as $item)
        <x-dashboard.list-item :item="$item">
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tracking Id:</span><strong>{{ $item->tracking_id }}</strong></li>
        </x-dashboard.list-item>
    @endforeach

</x-app-layout>
