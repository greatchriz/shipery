
<form class="" method="POST" action="{{ route('tracking') }}">
    @csrf
    <div class="col-md-7 col-sm-7">
        <div class="form-group">
            <input
            name="tracking_id"
                type="text"
                placeholder="Enter your product ID"
                required=""
                class="form-control box-shadow"
            />
        </div>
    </div>
    <div class="col-md-5 col-sm-5">
        <div class="form-group">
            <button class="btn-1">track your product</button>
        </div>
    </div>
</form>
