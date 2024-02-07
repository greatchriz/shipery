<x-app-layout>

    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sender & Receiver</h4>
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
    </div>
</x-app-layout>
