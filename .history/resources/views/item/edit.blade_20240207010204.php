<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Item</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="" action="{{ route('item.update', $item->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12">


                                        <x-dashboard.validation-form  inputName="name" inputPlaceholder="Enter Item Name"  inputTitle="Item Sender Name" inputValue="{{ $item->sender->name }}" disabled=true required="false" />



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
