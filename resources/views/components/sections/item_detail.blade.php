<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="hc1">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#hcs1" aria-expanded="true" aria-controls="hcs1">
                {{ $panelTitle }}
                <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
        </h4>
    </div>
    <div id="hcs1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hc1">
        <div class="panel-body">
            @isset($info)
                @foreach ($info as $item)
                    <h3>{{ $item['title'] }}</h3>
                    <p style="font-weight: bold">
                        {{ $item['detail'] }}
                    </p>
                @endforeach

            @endisset

        </div>
    </div>
</div>
