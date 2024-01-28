@props(['item'])
<!-- desired widget -->
<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card text-white bg-primary">
        <ul class="list-group list-group-flush">
            {{ $slot }}

        </ul>
    </div>
</div>
<!-- end desired widget -->

<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tracking Id:</span><strong>{{ $item->tracking_id }}</strong></li>
