@props(['data', 'dataTitle', 'dataCreateLink'])
<div class="container-fluid">

    <div class="col-xl-12">
        <div
            class="card dz-card"
        >
            <div class="card-header flex-wrap d-flex justify-content-between">
                <div>
                    <h4 class="card-title">{{ $dataTitle }}</h4>
                    <p class="m-0 subtitle">List of {{ $dataTitle }}</p>
                    <p class="m-0 subtitle">Total {{ $dataTitle }}: {{ $data->count() }}</p>
                </div>

               <a href="{{ $dataCreateLink }}" class="btn  btn-info"><span
                    class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                </span>Add</a>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive">

                        <table class="table table-responsive-md">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        {{ $slot }}

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
