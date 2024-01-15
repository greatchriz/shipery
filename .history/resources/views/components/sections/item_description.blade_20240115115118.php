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
                            @php

                                $senderAddress = implode(' ', [
                                    $item->sender->street,
                                    $item->sender->city,
                                    $item->sender->state,
                                    $item->sender->zip,
                                    $item->sender->country,
                                ]);

                                $receiverAddress = implode(' ', [
                                    $item->receiver->street,
                                    $item->receiver->city,
                                    $item->receiver->state,
                                    $item->receiver->zip,
                                    $item->receiver->country,
                                ]);

                                $senderInfo = [
                                    [
                                        'title' => 'Name',
                                        'detail' => $item->sender->name
                                    ],

                                    [
                                        'title' => 'Address',
                                        'detail' => $senderAddress
                                    ],

                                ];

                                $receiverInfo = [
                                    [
                                        'title' => 'Name',
                                        'detail' => $item->receiver->name
                                    ],

                                    [
                                        'title' => 'Address',
                                        'detail' => $receiverAddress
                                    ],

                                ];
                            @endphp

                            <x-sections.item_detail :info=$senderInfo panelTitle='Sender Details' />

                            <x-sections.item_detail :info=$receiverInfo panelTitle='Receiver Details' />


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
