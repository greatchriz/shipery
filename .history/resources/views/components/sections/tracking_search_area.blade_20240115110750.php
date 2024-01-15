<section class="tracking_search_area">
    <div class="container">
        <div class="tracking_search_inner">
            <h2 class="single_title">Track your Shipment</h2>
            <h5>Enter a tracking number, and get tracking results.</h5>
            <div class="input-group">
                <form action="/track" method="POST">
                    @csrf
                    <div class="form-group col-12">
                        <input type="text" name="tracking_number" class="form-control" placeholder="Tracking Number" />
                    </div>

                    <div class="col-sm-4">
                        <button type="submit" value="submit your quote" class="btn submit_blue form-control"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Track</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>

<section class="tracking_search_area">
    <div class="container">
        <form action="/track" method="POST">
            @csrf
        <div class="tracking_search_inner">
            <h2 class="single_title">Track your Shipment</h2>
            <h5>Enter a tracking number, and get tracking results.</h5>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tracking Number" />
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-circle-o-notch" aria-hidden="true"></i> Track
                    </button>
                </span>
            </div>
        </div>
        </form>
    </div>
</section>