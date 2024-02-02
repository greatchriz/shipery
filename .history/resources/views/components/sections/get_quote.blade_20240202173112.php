@props(['id' => 'hc1', 'active' => false, 'href' => 'hcs1'])
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
                            @if ($active)
                            aria-expanded="true"
                            @else
                            aria-expanded="false"
                            @endif
                            aria-controls="{{ $href }}"
                    >
                            Financial Analysis executive
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
                    <h3>Taxes and Account Manager Position Open</h3>
                    <p>Sut odit aut fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem
                            sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci velit, sed
                            quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam
                            aliquam quaerat voluptatem.</p>
                    <ul class="s_list">
                            <li><a href="#"><i
                                                    class="fa fa-check"
                                                    aria-hidden="true"
                                            ></i>Building a
                                            strategic development
                                    </a></li>
                            <li><a href="#"><i
                                                    class="fa fa-check"
                                                    aria-hidden="true"
                                            ></i>Plan is vital, as
                                            the tactics game</a>
                            </li>
                            <li><a href="#"><i
                                                    class="fa fa-check"
                                                    aria-hidden="true"
                                            ></i>Take advantage of
                                            any investment </a></li>
                            <li><a href="#"><i
                                                    class="fa fa-check"
                                                    aria-hidden="true"
                                            ></i>Plan a investment
                                            for future</a></li>
                    </ul>
                    <button
                            type="submit"
                            value="submit your quote"
                            class="btn submit_blue form-control"
                    >Apply Now <i
                                    class="fa fa-angle-right"></i></button>
            </div>
    </div>
</div>
