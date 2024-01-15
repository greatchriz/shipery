@props(['event'])

<li>
    <div class="checkpoint__time">
        <strong>{{ $event->formatted_start_date }}</strong>
        <div class="hint">{{ $event->formatted_start_time }}</div>
    </div>
    <div class="checkpoint__icon delivered"></div>
    <div class="checkpoint__content">
        <strong>Delivered, In/At Mailbox<span class="checkpoint__courier-name">USPS</span></strong>
        <div class="hint">ISC NEW YORK NY(USPS)</div>
    </div>
</li>
