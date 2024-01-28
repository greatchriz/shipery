@aware(['item'])

@php
    $columns = ['id', 'image_src', 'tracking_number']; // Add the column names you want to display here
    $attributes = $item->only($columns);
@endphp

@foreach($attributes as $column => $value)
    <li class="list-group-item d-flex justify-content-between">
        <span class="mb-0">{{ $column }}:</span><strong>{{ $value }}</strong>
    </li>
@endforeach
