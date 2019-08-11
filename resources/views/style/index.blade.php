<style type="text/css">
    @media only screen and (min-width:321px) and (max-width:480px) { /*phone*/
        .thumbnail{
            max-height:191px; 
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
        .thumbnail{
            height:119px; 
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