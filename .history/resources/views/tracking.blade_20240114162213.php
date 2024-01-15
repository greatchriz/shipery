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
                                <span class="fs-16">{{ $item->sender->name }}</span>
                            </li>
                            {{-- street --}}
                            {{-- city --}}
                            {{-- state --}}
                            {{-- zip --}}
                            {{-- country --}}

                            <li>
                                <span class="title-2">Address:</span>
                                <span class="fs-16">{{ $item->sender->street }},</span>
                            </li>
                            <li>
                                <span class="title-2"></span>
                                <span class="fs-16">{{ $item->sender->city }}</span>
                            </li>
                            <li>
                                <span class="title-2"></span>
                                <span class="fs-16">{{ $item->sender->state }} {{ $item->sender->zip }}</span>
                            </li>
                            <li>
                                <span class="title-2"></span>
                                <span class="fs-16">{{ $item->sender->country }}</span>
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
                            <span class="title-2">Receiver:</span>
                            <span class="fs-16">{{ $item->receiver->name }}</span>
                        </li>
                        {{-- street --}}
                        {{-- city --}}
                        {{-- state --}}
                        {{-- zip --}}
                        {{-- country --}}

                        <li>
                            <span class="title-2">Address:</span>
                            <span class="fs-16">{{ $item->receiver->street }},</span>
                        </li>
                        <li>
                            <span class="title-2"></span>
                            <span class="fs-16">{{ $item->receiver->city }}</span>
                        </li>
                        <li>
                            <span class="title-2"></span>
                            <span class="fs-16">{{ $item->receiver->state }} {{ $item->receiver->zip }}</span>
                        </li>
                        <li>
                            <span class="title-2"></span>
                            <span class="fs-16">{{ $item->receiver->country }}</span>
                        </li>


                    </ul>
                </div>
            </div>

            </div>
            <div class="progress-wrap">

                {{--  check if item status is not in system --}}
                @if ($item->status != 'in_system')
                    {{-- check if item trackingEvets is not empty --}}

                    @if (isset($item->trackingEvents))

                    @foreach ($item->currentLocationEvents() as $event)
                        @include('tracking.current_events')
                    @endforeach

                    @foreach ($item->pastLocationEvents() as $event)
                        @include('tracking.events')
                    @endforeach


                    @endif
                @else
                    <p>this item is in system</p>
                @endif
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
