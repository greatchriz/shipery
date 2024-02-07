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

                                        <div class="col-lg-12">


                                        <div class="card">
                                            <div class="card-header  border-0 pb-0">
                                                <h4 class="card-title">Notifications</h4>
                                            </div>
                                            <div class="card-body p-0">
                                                <div id="DZ_W_Todo1" class="widget-media dz-scroll height370 my-4 px-4">
                                                    <ul class="timeline">
                                                        @if($item->trackingEvents->count() > 0)

                                                        @foreach($item->trackingEvents as $event)

                                                        <li>
                                                            <div class="timeline-panel">

                                                                <div class="media-body">
                                                                    <h5 class="mb-1">{{ $event->title }}</h5>
                                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                                </div>

                                                            </div>
                                                        </li>

                                                        @endforeach
                                                        @else

                                                        <li>
                                                            <div class="timeline-panel">
                                                                <div class="media me-2">
                                                                    <img alt="image" width="50" src="images/avatar/1.jpg">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-1">You Have No Notifications</h5>
                                                                    {{-- <small class="d-block">29 July 2020 - 02:26 PM</small> --}}
                                                                </div>

                                                            </div>
                                                        </li>
                                                        @endif


                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                        </div>





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
