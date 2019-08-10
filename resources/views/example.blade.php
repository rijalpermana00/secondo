@extends('mainlayout')

@section('content') 
    <style type="text/css">
        @media only screen and (min-width:321px) and (max-width:480px) { /*phone*/
            .item img {
              width: 100%;
              height: 200px;
              max-height: 200px;
              object-fit: fill;
            }
            .carousel-inner{
                max-height: 200px;
                height: 200px;
            }
            .responsive_slider_img {
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: 100% 100%;
                height: 200px;
            }
        }
        @media only screen and (min-width: 480px) and (max-width: 960px) { /*tablet */
            .item img {
                width: 100%;
                max-height: 500px;
                object-fit: fill;
                height:500px !important;
                position:absolute;
                z-index:1;
            }
            .carousel-inner{
                max-height: 500px;
                height: 500px;
            }
            .responsive_slider_img {
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: 100% 100%;
                height: 500px;
            }
        }
        @media only screen and (min-width: 961px) {
            .thumbnail{
                max-height:151px; 
                display: flex; 
                overflow:hidden;
            }
            .thumbnail img {
                object-fit: cover;
            }
            .boxes-15{
                text-align: center;
                display: inline-block;
            }
            .carousel-inner{
                max-height: 500px;
                height: auto;
            }
           .item img {
              width: 100%;
              height: 600px;
              max-height: 600px;
              object-fit: fill;
            }
            .responsive_slider_img {
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: 100% 100%;
                height: 600px;
            }
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