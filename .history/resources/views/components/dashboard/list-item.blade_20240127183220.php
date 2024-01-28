@props(['item'])
<!-- desired widget -->
<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card text-white bg-primary">
        <ul class="list-group list-group-flush">
            {{ $slot }}

            {{-- <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li> --}}
        </ul>
    </div>
</div>
<!-- end desired widget -->
