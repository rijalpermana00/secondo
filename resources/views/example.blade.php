@extends('mainlayout')

@section('content') 

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
                <img src="/assets/images/Poster/1.jpg" style="width:100%;">
            </div>

            <div class="item">
                <img src="/assets/images/Poster/2.jpg" style="width:100%;">
            </div>

            <div class="item">
                <img src="/assets/images/Poster/3.jpg" style="width:100%;">
            </div>

            <div class="item">
                <img src="/assets/images/Poster/4.jpg" style="width:100%;">
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
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <h1 class="text-center heading-pad"><a href="/index" class="header-default"><img src="/assets/images/icons/group.svg" alt="Collect" width="72" height="72"> Our Team</a></h1>
                <div>See the People Behind the Scene.</div>
            </div>

            <div class="col-sm-4">
                <h1 class="text-center heading-pad"><a href="/" class="header-default"><img src="/assets/images/icons/student.svg" alt="Analyze" width="72" height="72"> Our Student</a></h1>
                <div>See your kids here?</div>
            </div>

            <div class="col-sm-4">
                <h1 class="text-center heading-pad"><a href="/" class="header-default"><img src="/assets/images/icons/save.svg" alt="Act" width="72" height="72"> World</a></h1>
                <div> Our Impact To The World</div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="widget-title lighter">
                    <i class="ace-icon fa fa-star orange"></i>
                    Posts
                </h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body" style="display: block;">
                <div class="widget-main no-padding">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                <div class="timeline-container">
                                    <div class="timeline-label">
                                        <span class="label label-primary arrowed-in-right label-lg">
                                            <b>Today</b>
                                        </span>
                                    </div>

                                    <div class="timeline-items">
                                        <div class="timeline-item clearfix">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h5 class="widget-title smaller">
                                                        <a href="#" class="blue">Susan</a>
                                                        <span class="grey">reviewed a product</span>
                                                    </h5>

                                                    <span class="widget-toolbar no-border">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16:22
                                                    </span>

                                                    <span class="widget-toolbar">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>
                                                    </span>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        <span class="red">high life</span>

                                                        accusamus terry richardson ad squid …
                                                        <div class="space-6"></div>

                                                        <div class="widget-toolbox clearfix">
                                                            <div class="pull-left">
                                                                <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                                <a href="#" class="bigger-110">Click to read …</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.timeline-items -->
                                    <div class="timeline-items">
                                        <div class="timeline-item clearfix">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h5 class="widget-title smaller">
                                                        <a href="#" class="blue">Bobby</a>
                                                        <span class="grey">Finished the movie</span>
                                                    </h5>

                                                    <span class="widget-toolbar no-border">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16:22
                                                    </span>

                                                    <span class="widget-toolbar">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>
                                                    </span>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        <span class="red">high life</span>

                                                        accusamus terry richardson ad squid …
                                                        <div class="space-6"></div>

                                                        <div class="widget-toolbox clearfix">
                                                            <div class="pull-left">
                                                                <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                                <a href="#" class="bigger-110">Click to read …</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.timeline-items -->
                                </div><!-- /.timeline-container -->
                                <div class="timeline-container">
                                    <div class="timeline-label">
                                        <span class="label label-success arrowed-in-right label-lg">
                                            <b>Yesterday</b>
                                        </span>
                                    </div>

                                    <div class="timeline-items">
                                        <div class="timeline-item clearfix">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h5 class="widget-title smaller">
                                                        <a href="#" class="blue">Susan</a>
                                                        <span class="grey">reviewed a product</span>
                                                    </h5>

                                                    <span class="widget-toolbar no-border">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16:22
                                                    </span>

                                                    <span class="widget-toolbar">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>
                                                    </span>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        <span class="red">high life</span>

                                                        accusamus terry richardson ad squid …
                                                        <div class="space-6"></div>

                                                        <div class="widget-toolbox clearfix">
                                                            <div class="pull-left">
                                                                <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                                <a href="#" class="bigger-110">Click to read …</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.timeline-items -->
                                    <div class="timeline-items">
                                        <div class="timeline-item clearfix">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h5 class="widget-title smaller">
                                                        <a href="#" class="blue">Bobby</a>
                                                        <span class="grey">Finished the movie</span>
                                                    </h5>

                                                    <span class="widget-toolbar no-border">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16:22
                                                    </span>

                                                    <span class="widget-toolbar">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>
                                                    </span>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        <span class="red">high life</span>

                                                        accusamus terry richardson ad squid …
                                                        <div class="space-6"></div>

                                                        <div class="widget-toolbox clearfix">
                                                            <div class="pull-left">
                                                                <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                                <a href="#" class="bigger-110">Click to read …</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.timeline-items -->
                                </div><!-- /.timeline-container -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div>
    </div>
    <div class="col-md-6">
        
    </div>

@endsection