<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bs/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <div class="title m-b-md">
                    Oesophageal cancer
                </div>
                <div class="title m-b-md">
                    Registration form new diagnosis
                </div>
            </div>
           
        </div>
        <form>
            <div class="form-content">
                Hospital: <input type="text" name="hospital">
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bs/bootstrap.min.js') }}"></script>
    </body>
</html>
