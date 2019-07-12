<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Listado de Kimonos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Listado de Kimonos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    <th>Anfitrión</th>
                                    <th>Cantidad de clientes</th>
                                    <th>Número de mesa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="reserva in reservas">
                                    <td>@{{reserva.id}}</td>
                                    <td>@{{reserva.clientName + ' ' + reserva.clientLastName}}</td>
                                    <td>@{{reserva.host}}</td>
                                    <td>@{{reserva.clientsQty}}</td>
                                    <td>@{{reserva.tableNumber}}</td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                    <button onclick="location.href='{{url('/form')}}'" >Agregar Reservas</button>
                </div>
            </div>

            
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>