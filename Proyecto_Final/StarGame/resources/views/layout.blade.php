<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield("page_title")</title>

        <!-- Styles -->
        @section("css")
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="<?php echo url('/styles/layout.css'); ?>" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="//fonts.googleapis.com/css2?family=Didact+Gothic&family=Roboto:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Font Awesome -->
        <script
        src="https://kit.fontawesome.com/d32b91bcb0.js"
        crossorigin="anonymous"
        ></script>
        @show
    </head>
    <body>
        <header></header>

    <!-- Styles -->
    @section("css")
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo url('/styles/layout.css'); ?>" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css2?family=Didact+Gothic&family=Roboto:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @show
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

    <body>
        <header></header>

        <x-mainHeader />
        <x-mainNav />
    
    <main>
        <div class="row">
        
            <div class="col-12">
            {{-- Inyecta contenido principal --}}
            @yield("main_content")

            <br><br><br>

        <x-footer />

        <!-- JS -->
        @section("js")
        <!--<script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>-->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"
        ></script>
        @show

        
    </body>
    
</html>
