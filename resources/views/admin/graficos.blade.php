@extends('admin.inicio')
@section('contenido')




    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                        <i class="md-icon material-icons">&#xE5D5;</i>
                        <div class="md-card-dropdown" data-uk-dropdown>
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                <ul class="uk-nav">
                                    <li><a href="#">Action 1</a></li>
                                    <li><a href="#">Action 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        Chart
                    </h3>
                </div>
                <div class="md-card-content">

                    {{--CHART--}}

                    <h4 class="heading_a uk-margin-bottom">C3.js</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h4 class="heading_c uk-margin-bottom">Donut Chart</h4>
                                    <div id="c3_chart_donut" class="c3chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h4 class="heading_c uk-margin-bottom">Stacked Bars Chart</h4>
                                    <div id="c3_chart_bar_stacked" class="c3chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{--END-CHART--}}



                </div>
            </div>
        </div>
    </div>
    {{--////////////////////////////////////--}}








    {{--////////////////////////--}}
    
@stop

