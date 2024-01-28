@aware(['item'])

@php
    $attributes = $item->getAttributes();
@endphp

@foreach($attributes as $column => $value)
    <li class="list-group-item d-flex justify-content-between">
        <span class="mb-0">{{ $column }}:</span><strong>{{ $value }}</strong>
    </li>
@endforeach
