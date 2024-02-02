@props(['id' => 'hc1', 'href' => 'hcs1', 'title' => '', 'content' => ''])
<div class="panel panel-default">


    <div
            class="panel-heading"
            role="tab"
            id="{{ $id }}"
    >
            <h4 class="panel-title">
                    <a
                            role="button"
                            data-toggle="collapse"
                            data-parent="#job"
                            href="#{{ $href }}"

                            aria-expanded="true"
                            aria-controls="{{ $href }}"
                    >
                    {{ $title }}
                            <i
                                    class="fa fa-caret-right"
                                    aria-hidden="true"
                            ></i>
                    </a>
            </h4>
    </div>

    <div
            id="{{ $href }}"
            class="panel-collapse collapse in"
            role="tabpanel"
            aria-labelledby="{{ $id }}"
    >
            <div class="panel-body">
                    <h3>{{ $title }}</h3>
                    <p>{{ $content}}.</p>

            </div>
    </div>
</div>
