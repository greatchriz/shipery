<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Item</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="" action="{{ route('item.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    {{-- name --}}
                                    <div class="col-xl-12">

                                        {{-- available columns:
                                        id, name, image_src, tracking_number, sender_id, receiver_id, shipment_type, weight, status, shipped_on, created_at, updated_at --}}

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="sender">Sender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="sender" name="sender_id">
                                                    <option data-display="Select">Please select</option>
                                                    @foreach ($senders as $sender)
                                                        <option value="{{ $sender->id }}">{{ $sender->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Sender.
                                                </div>
                                            </div>
                                        </div>

                                        {{-- create another select form like thge one above for receiver --}}

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="receiver">Receiver
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control" id="receiver" name="receiver_id">
                                                    <option data-display="Select">Please select</option>
                                                    @foreach ($receivers as $receiver)
                                                        <option value="{{ $receiver->id }}">{{ $receiver->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Receiver.
                                                </div>
                                            </div>
                                        </div>



                                        <x-dashboard.validation-form  inputName="name" inputPlaceholder="Enter Item Name" inputFeedback="Please Enter Item Name" inputTitle="Item Name"/>

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="weight">Weight
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">kg</span>
                                                    <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter Weight" required="">
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please Enter Item Weight
                                                </div>
                                            </div>
                                        </div>

                                        <x-dashboard.validation-form  inputName="shipped_on" inputPlaceholder="Enter Shipment Date" inputFeedback="Please Enter Item Shipped Date" inputTitle="Item Shipped Date"/>



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
    </div>
</x-app-layout>
