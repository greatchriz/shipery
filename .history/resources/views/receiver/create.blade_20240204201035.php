<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Receiver</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="" action="{{ route('receiver.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    {{-- name --}}
                                    <div class="col-xl-12">

                                        <x-dashboard.validation-form  inputName="name" inputPlaceholder="Enter Receiver Name" inputFeedback="Please Enter Receiver Name" inputTitle="Receiver Name"/>

                                        <x-dashboard.validation-form  inputName="street" inputPlaceholder="Enter Receiver Street" inputFeedback="Please Enter Receiver Street" inputTitle="Receiver Street"/>

                                        <x-dashboard.validation-form  inputName="city" inputPlaceholder="Enter Receiver City" inputFeedback="Please Enter Receiver City" inputTitle="Receiver City"/>

                                        <x-dashboard.validation-form  inputName="state" inputPlaceholder="Enter Receiver State" inputFeedback="Please Enter Receiver State" inputTitle="Receiver State"/>

                                        <x-dashboard.validation-form  inputName="zip" inputPlaceholder="Enter Receiver Zip" inputFeedback="Please Enter Receiver Zip" inputTitle="Receiver Zip"/>

                                        <x-dashboard.validation-form  inputName="country" inputPlaceholder="Enter Receiver Country" inputFeedback="Please Enter Receiver Country" inputTitle="Receiver Country"/>

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
