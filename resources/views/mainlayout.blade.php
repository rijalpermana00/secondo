<!doctype html>
<html>
    <head>
        @include('layouts.head')
        @include('layouts.jsindex')
    </head>
    <body class="no-skin">
        @include('layouts.header')
        @include('layouts.styleindex')
        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content-edited">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>

</html>

