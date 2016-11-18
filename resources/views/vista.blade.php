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

    </style>



    <h3 class="header"><strong>REGISTRO DIARIO DE  CALLE -  NIÑOS/AS  BENEFICIARIOS DEL PROGRAMA  DE 6 A 13 AÑOS</strong></h3>
    <br>



       <div class="row_p">

           <div class="row">
               <div class="col-md-3"><strong>Centro: </strong> {{$ninofuente->centro?'Pdte Franco':'Ciudad del este'}}</div>
               <div class="col-md-3"><strong>Educador: </strong> {{$ninofuente->educador->datos_persona->nombre}}</div>
               <div class="col-md-3"><strong>Resp. Verificacion: </strong> {{$ninofuente->educador->datos_persona->nombre}}</div>
               <div class="col-md-3"><strong>Fecha: </strong> {{$carbon}}</div>


           </div>

           <div class="row">
               <div class="col-md-3"><strong>Nombre del niño: </strong> {{$ninofuente->dato_nino->datos_persona->nombre}}</div>
               <div class="col-md-3"><strong>Actividad: </strong> {{$ninofuente->dato_nino->actividad}}</div>

               <div class="col-md-3"><strong>Foco: </strong> {{$ninofuente->foco}}</div>
               <div class="col-md-3"><strong>Procedencia: </strong> {{$ninofuente->procedencia}}</div>

           </div>

           <div class="row">
               <div class="col-md-3"><strong>Edad: </strong> {{$ninofuente->educador->datos_persona->edad}}</div>
               <div class="col-md-3"><strong>Sexo: </strong> {{$ninofuente->educador->datos_persona->sexo}}</div>

           </div>
       </div>

        <br>






    <table>
        <tr>
            <th>#ID</th>
            <th>Hora</th>
            <th>fecha</th>
        </tr>
        @foreach( $hora as $horas)
        <tr>
            <td>{{$horas->id_hora_trabajada}}</td>
            <td>{{$horas->horas}}</td>
            <td>{{$horas->fecha}}</td>
        </tr>
        @endforeach

    </table>


    <br>


    <div class="row">
        <div class="col-md-12"><strong>Promedio: </strong> {!! number_format($promedio,2) !!}</div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12"><strong>Observación: </strong> {{$ninofuente->observacion}}</div>


    </div>

</div>



</body>
</html>