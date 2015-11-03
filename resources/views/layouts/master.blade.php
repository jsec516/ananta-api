<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('author', 'Anthony Rappa')">
        @yield('meta')
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        @yield('before-styles-end')
        {!! HTML::style(elixir('assets/css/b_min_all.css')) !!}
        @yield('after-styles-end')

        <!-- Icons-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <main class="cyan">
            <div class="row">
                @include('includes.partials.messages')
            </div><!-- container -->
            @yield('content')
        </main>
        @include('frontend.includes.footer')
                
        @yield('before-scripts-end')
        {!! HTML::script(elixir('assets/js/b_min_all.js')) !!}
        @yield('after-scripts-end')

        @include('includes.partials.ga')
    </body>
</html>