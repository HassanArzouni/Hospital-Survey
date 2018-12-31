<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hospital Survey</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bs/bootstrap.min.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="mx-auto">
                    <h2 class="text-center">Oesophageal cancer</h2>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto">
                    <h3 class="text-center">Registration form new diagnosis</h3>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="mx-auto">
                    <h4 class="text-center">The variables with * in superscript are required.</h4>
                    <h4 class="text-center">The variables with a   <input type="radio" checked> are single-select variables; only one answer can be selected.</h4>
                    <h4 class="text-center">The variables with a   <input type="checkbox" checked> are multi-select variables; multiple answers can be selected.</h4>
                </div>
            </div>
        </div>

        <form>
            <div class="container-fluid">
                <div class="form-group row">
                    <div class="col-md-1 mx-auto text-center">
                        <label class="col-form-label">Hospital*</label>
                    </div>
                    <div class="col-md-11">
                        <input class="form-control" placeholder="Hospital">
                    </div>
                </div>
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bs/bootstrap.min.js') }}"></script>
    </body>
</html>
