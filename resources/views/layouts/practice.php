<!--<!DOCTYPE html>-->
<!--<html lang=" {{ app()->getLocale() }}">-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width", "initial-scale=1">-->
<!--    <meta name="csrf-token" content="{{ csrf_token() }}">-->
    
<!--    <title>@yield('title')</title>-->
<!--</html>-->

<!--@if (count($errors) > 0)-->
<!--<ul>-->
<!--    @foreach($errors->all() as $e)-->
<!--    <li> {{ $e }} </li>-->
<!--    @endforeach-->
<!--</ul>-->
<!--@endif-->


$text = sprintf("本日は%d年%d月%d日です", "2020", "4", "25");
echo $text.PHP_EOL;

echo "web: vendor/bin/heroku-php-apache2 public" > Procfile