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
                        <tbody>
                            @foreach ($receivers as $receiver)
                                <tr>
                                    <td>{{ $receiver->id }}</td>
                                    <td>{{ $receiver->name }}</td>
                                    <td>{{ $receiver->address }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a
                                                href="#"
                                                class="btn btn-primary shadow btn-xs sharp me-1"
                                            ><i class="fas fa-pencil-alt"></i></a>
                                            <a
                                                href="#"
                                                class="btn btn-danger shadow btn-xs sharp"
                                            ><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
