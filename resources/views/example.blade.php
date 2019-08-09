@extends('mainlayout')

@section('content') 
    <style type="text/css">
        html{
            width: 100%;
        }
        body {
            width: 100%;
            overflow-x: hidden;
            max-height: 100%;
        }
        .thumbnail img {
            object-fit: cover;
        }
        .carousel-inner{
            max-height: 500px;
        }
        .item{
            display: flex;
        }
    </style>
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/assets/images/155770.jpg" style="width:100%; height: 100%; object-fit: fill;">
                </div>

                <div class="item">
                    <img src="/assets/images/155772.jpg" style="width:100%; height: 100%; object-fit: fill;max-width:100%;max-height:100%;">
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
    <div class="row" style="background-color: #2E6DA4;">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="posts/createpost" class="header-default" style="color:white;"><img src="/assets/images/icons/group.svg" alt="Collect" width="72" height="72"> Our Team</a></h1>
                    <div>See the People Behind the Scene.</div>
                </div>

                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/" class="header-default" style="color:white;"><img src="/assets/images/icons/student.svg" alt="Analyze" width="72" height="72"> Our Student</a></h1>
                    <div>See your kids here?</div>
                </div>

                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/" class="header-default" style="color:white;"><img src="/assets/images/icons/save.svg" alt="Act" width="72" height="72"> World</a></h1>
                    <div> Our Impact To The World</div>
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