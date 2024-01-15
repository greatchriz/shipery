<x-front-layout>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin">product tracking</h2>
                        <p class="fs-16 no-margin">
                            Track your product & see the current condition
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a
                                href="#"
                                class="gray-clr"
                            >Home</a></li>
                        <li class="active">Track</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">
        <div class="theme-container container">
            <div class="row pad-10">
                <div
                    class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp"
                    data-wow-offset="50"
                    data-wow-delay=".30s"
                >
                    <h2 class="title-1">track your product</h2>
                    <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                        @include('tracking.form')
                    </div>
                </div>
            </div>
            {{-- check if item exists --}}
            @if (isset($item))
            <div class="row">
                @if (isset($item->image_src))
                <div
                    class="col-md-7 pad-30 wow fadeInLeft"
                    data-wow-offset="50"
                    data-wow-delay=".30s"
                >
                    <img
                        alt=""
                        src="{{ $item->image_src }}"
                    />
                </div>
                @endif

                <div
                    class="col-md-5 pad-30 wow fadeInRight"
                    data-wow-offset="50"
                    data-wow-delay=".30s"
                >
                    <div class="prod-info white-clr">
                        <ul>
                            <li>
                                <span class="title-2">Tracking Number:</span>
                                <span class="fs-16">{{ $item->tracking_number }}</span>
                            </li>
                            <li>
                                <span class="title-2">Shipment Type:</span>
                                <span class="fs-16">{{ $item->shipment_type }}</span>
                            </li>
                            <li>
                                <span class="title-2">Order Date:</span>
                                <span class="fs-16">{{ $item->shipped_on }}</span>
                            </li>
                            <li>
                                <span class="title-2">order status:</span>
                                <span class="fs-16 theme-clr">{{ ucwords(str_replace('_', ' ', $item->status)) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="col-md-5 pad-30 wow fadeInRight"
                    data-wow-offset="50"
                    data-wow-delay=".30s"
                >
                    <div class="prod-info white-clr">
                        <ul>
                            <li>
                                <span class="title-2">Sender:</span>
                                <span class="fs-16">{{ $item->senderAddress->name }}</span>
                            </li>
                            <li>
                                <span class="title-2">Shipment Type:</span>
                                <span class="fs-16">{{ $item->shipment_type }}</span>
                            </li>
                            <li>
                                <span class="title-2">Order Date:</span>
                                <span class="fs-16">{{ $item->shipped_on }}</span>
                            </li>
                            <li>
                                <span class="title-2">order status:</span>
                                <span class="fs-16 theme-clr">{{ ucwords(str_replace('_', ' ', $item->status)) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="progress-wrap">
                <div class="progress-status">
                    <span class="border-left"></span>
                    <span class="border-right"></span>
                    <span
                        class="dot dot-left wow fadeIn"
                        data-wow-offset="50"
                        data-wow-delay=".40s"
                    ></span>
                    <span
                        class="themeclr-border wow fadeIn"
                        data-wow-offset="50"
                        data-wow-delay=".50s"
                    >
                        <span class="dot dot-center theme-clr-bg"></span>
                    </span>
                    <span
                        class="dot dot-right wow fadeIn"
                        data-wow-offset="50"
                        data-wow-delay=".60s"
                    ></span>
                </div>
                <div class="row progress-content upper-text">
                    <div class="col-md-3 col-xs-8 col-sm-2">
                        <p class="fs-12 no-margin">FROM</p>
                        <h2 class="title-1 no-margin">London</h2>
                    </div>
                    <div class="col-md-2 col-xs-8 col-sm-3">
                        <p class="fs-12 no-margin">
                            [ <b class="black-clr">6 DAYS </b> ]
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                        <p class="fs-12 no-margin">currently in</p>
                        <h2 class="title-1 no-margin">singapore</h2>
                    </div>
                    <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                        <p class="fs-12 no-margin">
                            [ <b class="black-clr">2 DAYS </b> ]
                        </p>
                    </div>
                    <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                        <p class="fs-12 no-margin">to</p>
                        <h2 class="title-1 no-margin">dhaka</h2>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12 bg-red-200 p-4">
                    <div class="text-center">
                        <h2 class="title-1">No product found</h2>
                    </div>
                </div>
            </div>
            @endif
        </div>
        </div>
    </section>
    <!-- /.Tracking -->
</x-front-layout>
