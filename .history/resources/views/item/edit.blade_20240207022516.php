<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sender & Receiver Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form  method="POST">

                                <div class="row">

                                    <div class="col-xl-12">

                                        <div class="mb-3">
                                            <label class="form-label">Sender Name (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->sender->name }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Sender Address (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->sender->address }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Receiver Name (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->receiver->name }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Receiver Address (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->receiver->address }}" disabled>
                                        </div>

                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Item Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="{{ route('item.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <div class="col-xl-12">

                                        <div class="mb-3">
                                            <label class="form-label">Item Name (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->name }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Item Tracking Number (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->tracking_number }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Item Shipped On (Form Disabled)</label>
                                            <input type="text" class="form-control" value="{{ $item->shipped_on }}" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Item Weight </label>
                                            <input type="text" name="weight" class="form-control" value="{{ $item->weight }}" >
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="receiver">Item Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" name="status">
                                                    <option data-display="{{ $item->status }}">{{ $item->status }}</option>
                                                    <option value="picked_up">Picked Up</option>
                                                    <option value="in_transit">In Transit</option>
                                                    <option value="delivered">Delivered</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Receiver.
                                                </div>
                                            </div>
                                        </div>

                                        @if($item->trackingEvents->count() > 0)

                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header border-0 pb-0">
                                                        <h4 class="card-title">Item Tracking Events</h4>
                                                    </div>

                                                    @foreach($item->trackingEvents as $event)
                                                    <div class="card-body p-0">
                                                        <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370 my-4 px-4">
                                                            <ul class="timeline">
                                                                <li>
                                                                    <div class="timeline-badge primary"></div>
                                                                    <a class="timeline-panel " href="#">
                                                                        <span>10 minutes ago</span>
                                                                        <h6 class="mb-0">{{ $event->title }} <strong class="text-primary">$500</strong>.</h6>
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>

                                                    @endforeach


                                                </div>
                                            </div>

                                            @else

                                                        <div class="card-body danger">
                                                            <h5> you have no tracking events.</h5>
                                                        </div>

                                                    @endif






                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Item Event</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="" action="{{ route('item.tracking-events.store', $item->id) }}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="item_id" value="{{ $item->id }}"> --}}
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Item Event</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Item Event" >
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
