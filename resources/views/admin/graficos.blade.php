@extends('admin.inicio')
@section('contenido')

    {{--<div class="uk-grid">--}}
    {{--<div class="uk-width-1-1">--}}
    {{--<div class="md-card">--}}
    {{--<div class="md-card-toolbar">--}}
    {{--<div class="md-card-toolbar-actions">--}}
    {{--<i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>--}}
    {{--<i class="md-icon material-icons">&#xE5D5;</i>--}}
    {{--<div class="md-card-dropdown" data-uk-dropdown>--}}
    {{--<i class="md-icon material-icons">&#xE5D4;</i>--}}
    {{--<div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">--}}
    {{--<ul class="uk-nav">--}}
    {{--<li><a href="#">Action 1</a></li>--}}
    {{--<li><a href="#">Action 2</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<h3 class="md-card-toolbar-heading-text">--}}
    {{--Chart--}}
    {{--</h3>--}}
    {{--</div>--}}
    {{--<div class="md-card-content">--}}
    {{--<div class="mGraph-wrapper">--}}
    {{--<div id="mGraph_sale" class="mGraph"></div>--}}
    {{--</div>--}}
    {{--<div class="md-card-fullscreen-content">--}}
    {{--<div class="uk-overflow-container">--}}
    {{--<table class="uk-table uk-table-no-border uk-text-nowrap">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>Date</th>--}}
    {{--<th>Best Seller</th>--}}
    {{--<th>Total Sale</th>--}}
    {{--<th>Change</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>January 2014</td>--}}
    {{--<td>Non ad quos neque.</td>--}}
    {{--<td>$3 234 162</td>--}}
    {{--<td>0</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>February 2014</td>--}}
    {{--<td>Molestias et ut.</td>--}}
    {{--<td>$3 771 083</td>--}}
    {{--<td class="uk-text-success">+2.5%</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>March 2014</td>--}}
    {{--<td>Qui itaque ea reiciendis quo.</td>--}}
    {{--<td>$2 429 352</td>--}}
    {{--<td class="uk-text-danger">-4.6%</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>April 2014</td>--}}
    {{--<td>Eveniet adipisci magni.</td>--}}
    {{--<td>$4 844 169</td>--}}
    {{--<td class="uk-text-success">+7%</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>May 2014</td>--}}
    {{--<td>Impedit distinctio est.</td>--}}
    {{--<td>$5 284 318</td>--}}
    {{--<td class="uk-text-success">+3.2%</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>June 2014</td>--}}
    {{--<td>Cum est voluptatum.</td>--}}
    {{--<td>$4 688 183</td>--}}
    {{--<td class="uk-text-danger">-6%</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td>July 2014</td>--}}
    {{--<td>Tempora quia.</td>--}}
    {{--<td>$4 353 427</td>--}}
    {{--<td class="uk-text-success">-5.3%</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--<p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>--}}
    {{--<p class="uk-margin-top-remove">Vitae quia id sed dolores ut et molestiae repudiandae explicabo esse quidem repellat dolore perferendis ipsa ipsam molestias molestiae repudiandae soluta nesciunt non aut non cumque atque maiores ut nulla accusamus eos fugit adipisci sint corrupti quia autem nesciunt et soluta magni eligendi rerum et velit incidunt quis eos aut nam et quae amet excepturi voluptas ut vitae voluptates rerum tenetur officia tenetur ut delectus aperiam beatae optio ut dignissimos qui quibusdam laudantium ut non veniam nam voluptate unde est eius dolor iure voluptas ut explicabo ea in autem quis incidunt nisi recusandae pariatur sit voluptate facere vel quibusdam magni error earum dolores similique assumenda amet sunt nemo eveniet aut.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}




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


@stop

