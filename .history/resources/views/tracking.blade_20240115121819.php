<x-front-layout>

    <x-sections.banner_area />

    <x-sections.tracking_search_area />

    @isset($item)
        <x-sections.item_description :item=$item />

        <x-sections.timeline_tracking_area :item=$item />
    @endisset


</x-front-layout>
