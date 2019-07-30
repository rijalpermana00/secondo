<!doctype html>
<html>
<head>
    @include('layouts.head')
</head>
<style type="text/css">
    .container a,div {
        color:white;
    }

    span {
        color:white;
    }
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
    @include('layouts.jsindex')
</body>

</html>

