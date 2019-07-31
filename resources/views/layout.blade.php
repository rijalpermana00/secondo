<!doctype html>
<html>
<head>
    @include('layouts.head')
    @include('layouts.jsindex')
</head>
<body class="no-skin">
        @include('layouts.header')
    <div class="main-container ace-save-state" id="main-container">
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    
                    @yield('content')
                
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.jsindex')
</body>
</html>

