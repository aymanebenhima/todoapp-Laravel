<!DOCTYPE html>
<html>
    <head>
        <title>Todos</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 1rem;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>

        <div class="container text-center">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
              </div>
            @elseif (Session::has('danger'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('danger')}}
              </div>
            @elseif  (Session::has('info'))
            <div class="alert alert-info" role="alert">
                {{Session::get('info')}}
              </div>
                
            @endif
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
