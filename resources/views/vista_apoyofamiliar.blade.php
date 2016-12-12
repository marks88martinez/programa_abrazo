<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

    <title>PDF</title>




</head>
<body>

<div class="container">


    <style>
        .header{
            padding: 10px;
            background-color: #BFDC7E;
        }
        .container{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0 auto;
            padding: 0;
            width: 730px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .row_p{

            width: 100%;

        }
        .row{

            width: 100%;


        }
        .col-md-3{
            vertical-align: top;
          display: inline-block;
            width: 23%;
            padding-right: 10px;

        }
        ul li{
            padding: 10px;
list-style: none;
            border: 1px;
            
        }

    </style>


    {{--{!! $apoyo !!}--}}
    <h3 class="header"><strong>SEGUIMIENTO FAMILIAR</strong></h3>
    <br>


    {{--{!! $apoyo !!}--}}
       <div class="row_p">

           <div class="row">
               <div class="col-md-3"><strong>Centro: </strong> {{$apoyo->centro?'Pdte Franco':'Ciudad del este'}}</div>
               <div class="col-md-3"><strong>Educador: </strong> {{$apoyo->educadores->datos_persona->nombre}}</div>
               <div class="col-md-3"><strong>Nombre del titular: </strong> {{$apoyo->nombre_titular}}</div>
               <div class="col-md-3"><strong>Domicilio: </strong> {!! $apoyo->domicilio !!}</div>
           </div>
           <div class="row">
               <div class="col-md-12"><strong>Fecha: </strong> {{$carbon}}</div>
               {{--<div class="col-md-3"><strong>Actividad: </strong> {{$ninofuente->dato_nino->actividad}}</div>--}}
               {{--<div class="col-md-3"><strong>Foco: </strong> {{$ninofuente->foco}}</div>--}}
               {{--<div class="col-md-3"><strong>Procedencia: </strong> {{$ninofuente->procedencia}}</div>--}}
           </div>

           {{--<div class="row">--}}
               {{--<div class="col-md-3"><strong>Edad: </strong> {{$ninofuente->educador->datos_persona->edad}}</div>--}}
               {{--<div class="col-md-3"><strong>Sexo: </strong> {{$ninofuente->educador->datos_persona->sexo}}</div>--}}

           {{--</div>--}}
       </div>
    <hr>
        {{--<br>--}}

    <ul>
        {{--<li> <strong>Nombre del Titula: </strong> {!! $apoyo->nombre_titular !!}</li>--}}
        {{--<li> <strong>Nombre del Titula: </strong> {!! $apoyo->domicilio !!}</li>--}}
        <li> <strong>1- Numero de visitas: </strong> {!! $apoyo->visita_numero !!}</li>
        <li> <strong>2- Etapa del seguimiento: </strong>{!! $etapa[$apoyo->etapa_seguimiento]!!}</li>
        <li> <strong>3- Dimensiones Trabajadas: </strong>  {!! $dimension[$apoyo->dimensiones_t]!!}</li>
        <hr>
        <li> <strong>4- Descripción breve de actividad realizada en la visita s/ dimensión trabajada: </strong> {!! $apoyo->Descripción!!}</li>
        <li> <strong>5- Resultados: </strong> {!! $apoyo->resultados !!}</li>
        <li> <strong>6- Acuerdos: </strong> {!! $apoyo->acuerdos !!}</li>

    </ul>



    {{--<table>--}}
        {{--<tr>--}}
            {{--<th>#ID</th>--}}
            {{--<th>Hora</th>--}}
            {{--<th>fecha</th>--}}
        {{--</tr>--}}
        {{--@foreach( $apoyo as $apoyos)--}}
        {{--<tr>--}}
            {{--<td></td>--}}
            {{--<td>{{$apoyos->domicilio}}</td>--}}
            {{--<td>{{$apoyos->visita_numero}}</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}

    {{--</table>--}}


    <br>


    <div class="row">
        {{--<div class="col-md-12"><strong>Promedio: </strong> {!! number_format($promedio,2) !!}</div>--}}

    </div>
    <hr>
    <div class="row">
        <strong>Proxima visita: </strong> {!! $apoyo->proxima_visita !!}
        {{--<div class="col-md-12"><strong>Observación: </strong> {{$ninofuente->observacion}}</div>--}}


    </div>

</div>



</body>
</html>