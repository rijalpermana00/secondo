@extends('mainlayout')

@section('content') 
    
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
    </div>
    <div class="row" style="background-color: #2E6DA4;">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <h1 class="text-center heading-pad"><a href="/index" class="header-default" style="color:white;"><img src="/assets/images/icons/group.svg" alt="Collect" width="72" height="72"> Our Team</a></h1>
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
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <div class="page-header text-center">
                <h2><a href="https://www.itb.ac.id/news/index/category/home">Berita</a></h2>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-1.jpg" class="img-responsive" alt="Mengenalkan Sains dan Profesi pada Anak" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57184/home/mengenalkan-sains-dan-profesi-pada-anak">Mengenalkan Sains dan Profesi pada Anak</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-2.jpg" class="img-responsive" alt="Orasi Ilmiah Prof. Suhardi, Kontribusi Komputasi Layanan Service terhadap Transformasi Digital" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57183/home/orasi-ilmiah-prof-suhardi-kontribusi-komputasi-layanan-service-terhadap-transformasi-digital">Orasi Ilmiah Prof. Suhardi, Kontribusi Komputasi Layanan Service terhadap Transformasi Digital</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-3.jpg" class="img-responsive" alt="ITB Selenggarakan Chemistry Summer School 2019" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57182/home/itb-selenggarakan-chemistry-summer-school-2019">ITB Selenggarakan Chemistry Summer School 2019</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-4.jpg" alt="Desain Pesawat untuk Misi Evakuasi, Tim Mahasiswa ITB Juara Lomba UAV Aerofest 2019" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57181/home/desain-pesawat-untuk-misi-evakuasi-tim-mahasiswa-itb-juara-lomba-uav-aerofest-2019">Desain Pesawat untuk Misi Evakuasi, Tim Mahasiswa ITB Juara Lomba UAV Aerofest 2019</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-1.jpg" class="img-responsive" alt="Mengenalkan Sains dan Profesi pada Anak" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57184/home/mengenalkan-sains-dan-profesi-pada-anak">Mengenalkan Sains dan Profesi pada Anak</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-2.jpg" class="img-responsive" alt="Orasi Ilmiah Prof. Suhardi, Kontribusi Komputasi Layanan Service terhadap Transformasi Digital" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57183/home/orasi-ilmiah-prof-suhardi-kontribusi-komputasi-layanan-service-terhadap-transformasi-digital">Orasi Ilmiah Prof. Suhardi, Kontribusi Komputasi Layanan Service terhadap Transformasi Digital</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-3.jpg" class="img-responsive" alt="ITB Selenggarakan Chemistry Summer School 2019" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57182/home/itb-selenggarakan-chemistry-summer-school-2019">ITB Selenggarakan Chemistry Summer School 2019</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="boxes-15" style="height:290px;">
                    <div class="thumbnail">
                        <img src="/assets/images/gallery/image-4.jpg" alt="Desain Pesawat untuk Misi Evakuasi, Tim Mahasiswa ITB Juara Lomba UAV Aerofest 2019" style="width:240px; height:150px;">
                    </div>
                    <div class="caption">
                        <h5>
                            <a href="https://www.itb.ac.id/news/read/57181/home/desain-pesawat-untuk-misi-evakuasi-tim-mahasiswa-itb-juara-lomba-uav-aerofest-2019">Desain Pesawat untuk Misi Evakuasi, Tim Mahasiswa ITB Juara Lomba UAV Aerofest 2019</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection