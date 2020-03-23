<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Detalle Restaurante</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
            .row.content {height: 1500px}

            /* Set gray background color and 100% height */
            .sidenav {
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height: auto;} 
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <h4>{{ Auth::user()->nombre ?? 'RDM' }}</h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{ route('restaurantes') }}">Restaurantes</a></li>
                        <li class="active"><a href="{{ route('restaurante.index') }}">Comentarios</a></li>
                    </ul><br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Blog..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="col-sm-9">
                    <h4><small>Restaurante - {{ $restaurante->nombre }}</small></h4>
                    <hr>
                    <h2>Nos encanta la comida</h2>
                    <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                    <h5>
                        <span class="label label-danger">México</span>
                        <span class="label label-primary">Comida</span>
                        <span class="label label-success">Viajes</span>
                    </h5>
                    <br>
                    <!--<p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                    <h4><b>Nombre del restaurante:</b> {{ $restaurante->nombre }}</h4>
                    <h4><b>Telefono:</b> {{ $restaurante->telefono }}</h4>
                    <h4><b>Horario:</b> {{ $restaurante->horario }}</h4>
                    <h4><b>Dirección:</b> {{ $restaurante->direccion }}</h4>
                    <br>

                    <hr>

                    <h4>Cuentanos tu experiencia:</h4>
                    <form action="{{ route('comentario.store') }}" method="POST" role="form">
                        @auth
                        <div class="form-group">
                            @csrf
                            <input type="hidden" name="restaurante_id" value="{{ $restaurante->id }}">
                            <textarea name="comentario" class="form-control" rows="3" {!! $errors->has('comentario') ? 'style="border:solid 1px #a94442"' : '' !!}></textarea>
                            @error('comentario')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                        @else
                        <div class="form-group">
                            <textarea name="comentario" class="form-control" rows="3" disabled></textarea>
                            <small><a href="{{ route('login') }}">Inicia sesión para porder comentar</a></small>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Comentar</button>
                        @endauth
                    </form>
                    <br/>
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>¡Gracias por tu comentario!</strong> {{ session('status') }}
                    </div>
                    @endif
                    <br><br>

                    <p><span class="badge">{{ $comentarios->count() }}</span> Comentarios:</p><br>

                    <div class="row">
                        @foreach($comentarios as $comentario)
                        <div class="col-sm-2 text-center">
                            <img src="https://placeimg.com/50/50/people" class="img-circle" height="65" width="65" alt="Avatar">
                        </div>
                        <div class="col-sm-10">
                            <h4>{{ $comentario->nombre }} {{ $comentario->apellido }} <small>{{ $comentario->created_at }}</small></h4>
                            <p>{{ $comentario->comentario }}</p>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid">
            <p>Restaurantes SA de CV 2020</p>
        </footer>

    </body>
</html>
