@props(['item'])


<section class="timeline_tracking_area">
    <div class="container">
        <div class="timeline_tracking_inner">
            <div class="timeline_tracking_box">
                <div class="tracking_head">
                    <h4>{{ $item->tracking_number }}</h4>
                </div>
                <div class="scheduled_area">
                    <ul>
                        <li>
                            <div class="schedul_box">
                                <h5>Pickup</h5>
                            </div>
                            <div class="s_icon"></div>
                        </li>
                        <li>
                            <div class="schedul_box">
                                <h5>In Transist</h5>
                            </div>
                            <div class="s_icon"></div>
                        </li>
                        <li>
                            <div class="schedul_box">
                                <h5>Delivery</h5>
                            </div>
                            <div class="s_icon active"></div>
                        </li>
                    </ul>
                </div>
                <div class="tracking_in tag-delivered">
                    <h4>DELIVERED</h4>
                </div>
                <div class="tracking_list">
                    <ul>
                        <li>
                            <div class="checkpoint__time">
                                <strong>Oct 23, 2017</strong>
                                <div class="hint">02:55 pm</div>
                            </div>
                            <div class="checkpoint__icon delivered"></div>
                            <div class="checkpoint__content">
                                <strong>Delivered, In/At Mailbox<span class="checkpoint__courier-name">USPS</span></strong>
                                <div class="hint">ISC NEW YORK NY(USPS)</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkpoint__time">
                                <strong>Oct 23, 2017</strong>
                                <div class="hint">10:05 am</div>
                            </div>
                            <div class="checkpoint__icon outfordelivery"></div>
                            <div class="checkpoint__content">
                                <strong>Out for Delivery<span class="checkpoint__courier-name">USPS</span></strong>
                                <div class="hint">ISC NEW YORK NY(USPS)</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkpoint__time">
                                <strong>Oct 22, 2017</strong>
                                <div class="hint">07:25 pm</div>
                            </div>
                            <div class="checkpoint__icon intransit"></div>
                            <div class="checkpoint__content">
                                <strong>Arrived at Post Office<span class="checkpoint__courier-name">USPS</span></strong>
                                <div class="hint">ISC NEW YORK NY(USPS)</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkpoint__time">
                                <strong>Oct 21, 2017</strong>
                                <div class="hint">08:55 pm</div>
                            </div>
                            <div class="checkpoint__icon intransit"></div>
                            <div class="checkpoint__content">
                                <strong>Departed Shipping Partner Facility<span class="checkpoint__courier-name">USPS</span></strong>
                                <div class="hint">ISC CALIFORNIA NY(USPS)</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkpoint__time">
                                <strong>Oct 21, 2017</strong>
                                <div class="hint">11:30 am</div>
                            </div>
                            <div class="checkpoint__icon intransit"></div>
                            <div class="checkpoint__content">
                                <strong>Picked Up by Shipping Partner<span class="checkpoint__courier-name">USPS</span></strong>
                                <div class="hint">ISC CALIFORNIA NY(USPS)</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
