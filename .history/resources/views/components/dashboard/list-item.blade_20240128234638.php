@aware(['item'])

@php
    $itemArray = $item->toArray();
@endphp

@foreach($itemArray as $column => $value)
    <li class="list-group-item d-flex justify-content-between">
        <span class="mb-0">{{ $column }}:</span><strong>{{ $value }}</strong>
    </li>
@endforeach
