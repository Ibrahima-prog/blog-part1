<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>
    <nav class="container">
        <nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="navbar-collapse-2">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">@lang('header.welcome',['name'=>'Ibrahima']) </a>
    </div>
</div>

<div class="collapse navbar-collapse" id="navbar-collapse-2"></div>
<ul class="nav navbar-nav">

    <li><a href="">home</a></li>
    <li><a href="">{{trans_choice ('header.item',3)}}</a></li>
    <li><a href="">About</a></li>
    <li><a href="">@lang('header.contact')</a></li>

</ul>
        </nav>

    </nav>
<div class="col-lg-offset-f col-lg-4">
    <form action="form" method="POST" id="form">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="name" placeholder="yo">
        @captcha()
        <input type="submit" class="form btn-success">
    </form>
</div>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
<script>
$(document).ready(function()
{
    //$('#form').submit();
});
</script>
</html>
