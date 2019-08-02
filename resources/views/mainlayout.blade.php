<!doctype html>
<html>
    <head>
        @include('layouts.head')
        @include('layouts.jsindex')
    </head>
    <style type="text/css">
    </style>
    <body class="no-skin">
        @include('layouts.header')
        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">
                    @yield('content')                
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>

</html>

