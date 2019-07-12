<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Listado de Participantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Registro de Participantes</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                    @if(count($errors) > 0)

                        <div class="alert alert-danger"> 
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    
                        <form method="post" action="/save">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                            <div class="form-group">
                                <label for="clientName">Nombre del cliente</label>
                                <input type="text" class="form-control"
                                 placeholder="Nombres" name="clientName">
                            </div>

                            <div class="form-group">
                                <label for="clientLastName">Apellidos del cliente</label>
                                <input type="text"
                                class="form-control" placeholder="Apellidos"
                                name="clientLastName">
                            </div>

                            <div class="form-group">
                                <label for="host">Anfitrión</label>
                                <input type="text"
                                class="form-control" placeholder="Anfitrión"
                                name="host">
                            </div>

                            <!-- <div class="form-group">
                                <label for="clientsQty">Cantidad de clientes</label>
                                <select class="form-control" name="clientsQty" >
                                    <option v-for="i in 5" v-model="qty">@{{per.c}}</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label for="clientsQty">Número de clientes</label>
                                <input type="number"
                                class="form-control" placeholder="Número de clientes"
                                name="clientsQty" v-model="qty">
                            </div>

                            <div class="form-group">
                                <label for="tableNumber">Número de mesa</label>
                                <select class="form-control" name="tableNumber">
                                    <option>@{{}}</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>                
                    </div>
                </div>
            </div>
        </div>

       

        <script src="/js/app.js"></script>
    </body>
</html>