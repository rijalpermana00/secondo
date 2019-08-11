@extends('mainlayout')
@section('content') 
@include('style.index')
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <div class="responsive_slider_img" style="background-image:url('/assets/images/155770.jpg');">                                 
                    </div>
                </div>

                <div class="item">
                    <div class="responsive_slider_img" style="background-image:url('/assets/images/155772.jpg');">
                    </div>
                </div>

                <div class="item">
                    <div class="responsive_slider_img" style="background-image:url('/assets/images/th.jpg');">                                 
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row customback">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/staff/" class="header-default" style="color:white;"><img src="/assets/images/icons/group.svg" alt="Collect" width="72" height="72"><br>Our Team</a></h1>
                    <div class="white">See the People Behind the Scene.</div>
                </div>

                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/student/" class="header-default" style="color:white;"><img src="/assets/images/icons/student.svg" alt="Analyze" width="72" height="72"><br>Our Student</a></h1>
                    <div class="white">See your kids here?</div>
                </div>

                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/alumnus/" class="header-default" style="color:white;"><img src="/assets/images/icons/save.svg" alt="Act" width="72" height="72"><br>World</a></h1>
                    <div class="white"> Our Impact To The World</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <div class="page-header text-center">
                <h2><a href="/posts/">Berita</a></h2>
            </div>
            <div id="posts">
            </div>
        </div>
    </div>
    <script src="/js/index.js" type="text/javascript">
    </script>
@endsection