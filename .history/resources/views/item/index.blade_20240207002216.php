<x-app-layout>

    <div class="container-fluid">

        <div class="col-xl-12">
            <div
                class="card dz-card"
            >
                <div class="card-header flex-wrap d-flex justify-content-between">
                    <div>
                        <h4 class="card-title">Items</h4>
                        <p class="m-0 subtitle">List of Items</p>
                        <p class="m-0 subtitle">Total Items: {{ $items->count() }}</p>
                    </div>

                   <a href="/items/create" class="btn  btn-info"><span
                        class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                    </span>Add</a>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>

                                    <th><strong>Id.</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Tracking Number</strong></th>
                                    <th><strong>Shipped Type</strong></th>
                                    {{-- weight --}}
                                    <th><strong>Weight</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Shipped On</strong></th>

                                    <th><strong></strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>

                                    <td><strong>{{ $item->id }}</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/otherp/images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt="">
                                            <span class="w-space-no">{{ $item->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $item->tracking_number }}	</td>
                                    <td>{{ $item->shipment_type }}</td>
                                    <td>{{ $item->weight }}</td>

                                    @if($item->status == 'picked_up')
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-primary me-1"></i> Picked Up</div></td>
                                    @elseif($item->status == 'in_transit')
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> In Transit</div></td>
                                    @elseif($item->status == 'delivered')
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Delivered</div></td>
                                    @endif
                                    <td>{{ $item->shipped_on }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

</x-app-layout>
