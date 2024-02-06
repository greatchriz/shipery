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

                                        <x-dashboard.validation-form  inputName="name" inputPlaceholder="Enter Item Name" inputFeedback="Please Enter Item Name" inputTitle="Item Name"/>


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
