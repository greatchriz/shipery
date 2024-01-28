@aware(['item'])

@php
    $columns = ['image_src', 'tracking_number', 'shipment_type', 'weight', 'status', 'shipped_on']; // Add the column names you want to display here
    $attributes = $item->only($columns);
@endphp

@foreach($attributes as $column => $value)
    <li class="list-group-item d-flex justify-content-between">
        <span class="mb-0">{{ $column }}:</span><strong>{{ $value }}</strong>
    </li>
@endforeach
