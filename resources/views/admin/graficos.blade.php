@extends('admin.inicio')
@section('contenido')




    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                        {{--<i class="md-icon material-icons">&#xE5D5;</i>--}}
                        <div class="md-card-dropdown" data-uk-dropdown>
                            {{--<i class="md-icon material-icons">&#xE5D4;</i>--}}
                            <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                {{--<ul class="uk-nav">--}}
                                    {{--<li><a href="#">Action 1</a></li>--}}
                                    {{--<li><a href="#">Action 2</a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        Chart
                    </h3>
                </div>
                <div class="md-card-content">

                    {{--CHART--}}

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h4 class="heading_c uk-margin-bottom">Horas trabajadas por fecha</h4>
                                    <div id="c3_chart_donut" class="c3chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <div class="md-card">
                                <div class="md-card-content">
                                    <h4 class="heading_c uk-margin-bottom">Motivo de visita familiar</h4>
                                    <div id="c3_chart_bar_stacked" class="c3chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{--END-CHART--}}

             <div class="container">
                 <div class="md-card-fullscreen-content">
                     <div class="uk-overflow-container">
                         <h3 class="heading_a">Horas trabajadas</h3>
                         <table class="uk-table uk-table-no-border uk-text-nowrap">
                             <thead>
                             <tr>
                                 <th>Fecha</th>
                                 <th>Horas Trabajadas</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($horasPorDia as $fecha)
                                 <tr>
                                     <td>{{ $fecha->fechaFormateada }}</td>
                                     <td>{{ number_format($fecha->horas, 1) }}</td>
                                 </tr>
                             @endforeach
                             </tbody>
                         </table>
                     </div>
                     {{--<p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>--}}
                     {{--<p class="uk-margin-top-remove">Vitae quia id sed dolores ut et molestiae repudiandae explicabo esse quidem repellat dolore perferendis ipsa ipsam molestias molestiae repudiandae soluta nesciunt non aut non cumque atque maiores ut nulla accusamus eos fugit adipisci sint corrupti quia autem nesciunt et soluta magni eligendi rerum et velit incidunt quis eos aut nam et quae amet excepturi voluptas ut vitae voluptates rerum tenetur officia tenetur ut delectus aperiam beatae optio ut dignissimos qui quibusdam laudantium ut non veniam nam voluptate unde est eius dolor iure voluptas ut explicabo ea in autem quis incidunt nisi recusandae pariatur sit voluptate facere vel quibusdam magni error earum dolores similique assumenda amet sunt nemo eveniet aut.</p>--}}
                     {{----}}
                 </div>
             </div>




                </div>
            </div>
        </div>
    </div>
    {{--////////////////////////////////////--}}








    {{--////////////////////////--}}
    
@stop
@section('js')
    <script>
        var donutChart = {
            title: "",
            columns: [
                    @foreach($horasPorDia as $fecha)
                ["{{ $fecha->fechaFormateada }}", {{ $fecha->horas }}],
                    @endforeach
            ]
        };

        var stackChart = {
            columns:[
                @foreach($dimensiones as $dimensionId => $dimension)
                        ["{{ $dimension }}"
                    @foreach($dimensionesPorDia as $fecha => $dimensionesPorFecha)
                        , {{ count($dimensionesPorFecha->whereLoose('dimensiones_t', (string)$dimensionId)) == 0 ? 0 : $dimensionesPorFecha->whereLoose('dimensiones_t', (string)$dimensionId)->values()[0]->cantidad }}
                    @endforeach
                ],
                @endforeach
            ],
            labels: [
                @foreach($fechas as $index => $fecha)
                {
                    value: {{ $index }},
                    text: "{{ \Carbon\Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y') }}"
                },
                @endforeach
            ]
        };
        stackChart.groups = stackChart.columns.map(function(arr) { return arr[0]; });
    </script>
    <script src="{{URL::to('assets/js/custom/graficos.js')}}"></script>
@stop