<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    @livewireStyles
    @livewireScripts
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live wire</title>
</head>
<body>
<div class="row  col-12 text-center m-5">
    <div class="col border">
        <livewire:tickets/>
    </div>
    <div class="col mr-5">
        <livewire:comments/>
    </div>
</div>
</body>
</html>
