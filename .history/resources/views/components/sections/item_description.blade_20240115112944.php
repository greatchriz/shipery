@props(['item'])

<section class="about_area carrer_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="main_title">
                    <h5>Description</h5>
                    <h2>Item Description</h2>
                </div>


                <div class="carrer_image">
                    <img src="{{ $item->image_src }}" alt="" />
                </div>
            </div>

            <div class="col-md-6">
                    <div class="open_position_inner">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            {{-- item sender details --}}
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="hc1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#hcs1" aria-expanded="true" aria-controls="hcs1">
                                            Sender Details
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="hcs1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hc1">
                                    <div class="panel-body">
                                        <h3>Name</h3>


                                        {{-- $table->string('name');
                                            $table->string('street');
                                            $table->string('city');
                                            $table->string('state');
                                            $table->string('zip');
                                            $table->string('country');
                                        --}}

                                        <p style="font-weight: bold">
                                            {{ $item->sender->name }}
                                        </p>


                                        <h3>Address</h3>
                                        <p>
                                            {{ $item->sender->street }} {{ $item->sender->city }} {{ $item->sender->state }} {{ $item->sender->zip }} {{ $item->sender->country }}
                                        </p>
                                        <ul class="s_list">
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Building
                                                    a strategic development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Plan is
                                                    vital, as the tactics game</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Take
                                                    advantage of any investment
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Plan a
                                                    investment for future</a>
                                            </li>
                                        </ul>
                                        <button type="submit" value="submit your quote" class="btn submit_blue form-control">
                                            Apply Now <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- item receiver details --}}
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="hc2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#hcs2" aria-expanded="false" aria-controls="hcs2">
                                            Client's Investments Executive
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="hcs2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hc2">
                                    <div class="panel-body">
                                        <h3>Taxes and Account Manager Position Open</h3>
                                        <p>
                                            Sut odit aut fugit, sed quia consequuntur magni dolores eos
                                            qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                            est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora
                                            incidunt ut labore et dolore magnam aliquam quaerat
                                            voluptatem.
                                        </p>
                                        <ul class="s_list">
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Building
                                                    a strategic development
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Plan is
                                                    vital, as the tactics game</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Take
                                                    advantage of any investment
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-check" aria-hidden="true"></i>Plan a
                                                    investment for future</a>
                                            </li>
                                        </ul>
                                        <button type="submit" value="submit your quote" class="btn submit_blue form-control">
                                            Apply Now <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
