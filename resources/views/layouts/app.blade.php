<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Form</title>
</head>
<body>
<div class="container">

    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="change_locale d-flex justify-content-end">
                <a href="{{route('change_locale', ['locale' => 'uz'])}}" class="badge btn-primary"
                   style="margin: 10px;padding: 10px;">UZ</a>
                <a href="{{route('change_locale', ['locale' => 'ru'])}}" class="badge btn-primary"
                   style="margin: 10px;padding: 10px;">RU</a>
            </div>

            @yield('content')

        </div>
    </div>
</div>


</body>
</html>
