<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Sender</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="">
                                <div class="row">

                                    {{-- name --}}
                                    <div class="col-xl-6">
                                        <x-dashboard.validation-form  inputName="name" inputPlaceholder="Enter Sender Name" inputFeedback="Please Enter Sender Name" inputTitle="Sender Name"/>



                                    </div>

                                    {{-- street --}}
                                    <div class="col-xl-6">
                                        <x-dashboard.validation-form  inputName="street" inputPlaceholder="Enter Sender Street" inputFeedback="Please Enter Sender Street" inputTitle="Sender Street"/>

                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-lg-8 ms-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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


i have the following column names for my senders table
1: name, 2: street, 3: city, 4: state, 5: zip, 6: country
