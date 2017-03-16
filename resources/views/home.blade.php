<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Logic -Html چند منظوره</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}" />

    <link rel="stylesheet" href="{{asset("css/home-style.css")}}">
    <script src="{{asset("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js")}}"></script>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="200">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>

<div class="culmn">
    <header id="main_menu" class="header navbar-fixed-top">
        <div class="main_menu_bg">
            <div class="container">
                <div class="row">
                    <div class="nave_menu">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#home">
                                        <img src="assets/images/logo01.png"/>
                                    </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->



                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-left">
                                        <li><a href="#home">صفحه اصلی</a></li>
                                        <li><a href="#service">خدمات</a></li>
                                        <!-- <li><a href="#team">تیم</a></li>-->
                                        <li><a href="#portfolio">نمونه کارها</a></li>
                                        <li><a href="#testimonial">گواهی نامه</a></li>
                                        <li><a href="#contact">تماس با ما</a></li>


                                        <li>
                                            <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-search"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <form class="navbar-form" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="جستجو">
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>


                                </div>

                            </div>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
    </header> <!--End of header -->





    <section id="home" class="home" style="@foreach(\App\Slider::all() as $slider)background-image:{{"url(\""}}{{asset("storage/image/{$slider->image_name}")}}{{"\")"}} @endforeach">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class=" text-center">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>@if(\App\Slider::first() != null){{\App\Slider::first()->titleOne}}@endif</h1>
                                    <p>@if(\App\Slider::first() != null){{\App\Slider::first()->titleTwo}}@endif</p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_service_area">
                        <div class="main_service_content">
                            <div class="service_tabe">
                                <!-- Nav tabs -->
                                <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#webdesign" aria-controls="webdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />@if(\App\Order::first()!= null ){{\App\Order::first()->titleOne}}@endif</a></li>
                                    <li role="presentation"><a href="#appdesign" aria-controls="appdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />@if(\App\Order2::first()!= null ){{\App\Order2::first()->titleOne}}@endif </a></li>
                                    <li role="presentation"><a href="#graphicdesign" aria-controls="graphicdesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />@if(\App\Order3::first()!= null ){{\App\Order3::first()->titleOne}}@endif</a></li>
                                    <li role="presentation"><a href="#gamedesign" aria-controls="gamedesign" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />عکاسی</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="webdesign">
                                        <div class="single_service_tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="single_tab_content">
                                                        <div class="head_title">
                                                            <h3>@if(\App\Order::first()!= null ){{\App\Order::first()->titleTwo}}@endif</h3>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <p> @if(\App\Order::first()!= null ){{\App\Order::first()->body}}@endif  </p>

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="single_tab_img">
                                                        <img src="@foreach(\App\Order::all() as $about){{asset("storage/image/{$about->imageName}")}}@endforeach" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="appdesign">
                                        <div class="single_service_tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="single_tab_content">
                                                        <div class="head_title">
                                                            <h3>@if(\App\Order2::first()!= null ){{\App\Order2::first()->titleTwo}}@endif</h3>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <p>@if(\App\Order2::first()!= null ){{\App\Order2::first()->titleTwo}}@endif</p>


                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="single_tab_img">
                                                        <img src="@foreach(\App\Order2::all() as $about){{asset("storage/image/{$about->imageName}")}}@endforeach" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="graphicdesign">
                                        <div class="single_service_tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="single_tab_content">
                                                        <div class="head_title">
                                                            <h3>@if(\App\Order3::first()!= null ){{\App\Order3::first()->titleTwo}}@endif</h3>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <p>@if(\App\Order3::first()!= null ){{\App\Order3::first()->titleTwo}}@endif</p>


                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="single_tab_img">
                                                        <img src="@foreach(\App\Order3::all() as $about){{asset("storage/image/{$about->imageName}")}}@endforeach" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gamedesign">
                                        <div class="single_service_tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="single_tab_content">
                                                        <div class="head_title">
                                                            <h3>طراحی بازی چهار</h3>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                                            مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                            حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                                            در این صورت می توان امید داشت که تمام و دشواری موجود  </p>

                                                        <a href="" class="btn btn-primary">اطلاعات بیشتر</a>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="single_tab_img">
                                                        <img src="{{asset("assets/images/featureslid1.jpg")}}" alt="" />
                                                    </div>
                                                </div>
                                                <!--                                                        <div id="pentagon"></div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_features_area sections">
                        <div class="head_title">
                            <h3>خدمات ویژه</h3>
                            <div class="separator"></div>
                        </div>
                        <div class="row">
                            <div class="main_features_content">

                                <div class="col-sm-6">

                                    <div class="single_features_slide">
                                        <div class="single_ft_s_item">
                                            <img src="{{asset("assets/images/01.jpg")}}" alt="" />
                                        </div>
                                        <div class="single_ft_s_item">
                                            <img src="{{asset("assets/images/02.jpg")}}" alt="" />
                                        </div>
                                        <div class="single_ft_s_item">
                                            <img src="{{asset("assets/images/03.jpg")}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single_features_text">
                                        <h4>دست با یک ساعت مچی زیباتر میشود</h4>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و ,
                                            فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها</p>

                                        <ul>
                                            <li><span>مشتری:</span>لورم ایپسوم</li>
                                            <li><span>تحویل داده شده:</span> یکشنبه، 15 آگوست 2015</li>
                                            <li><span>برچسب ها:</span>دست، دیده بان، سیاه و سفید، درخت</li>
                                        </ul>

                                        <a href="" class="btn">اکنون بخرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="video" class="video text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="video_overlay bg-vdo embed-responsive-item">
            <div class="container">
                <div class="row">
                    <div class="main_video">
                        <div class="col-sm-12">
                            <div class="icon">
                                <a href="">
                                    <center>
                                        <video controls autoplay loop width="640" height="360">

                                            <source src="{{asset("video/vdo01.mp4")}}" type="video/mp4">
                                            Video is not supported by your browser


                                        </video>
                                    </center>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="main_about_area sections">
                    <div class="col-sm-12">

                        <div class="main_about_content">
                            <div class="row">

                                <div class="col-sm-7 wow fadeInRight" data-wow-duration="700ms">
                                    <div class="single_about_right_content">
                                        <div class="head_title">
                                            <h3>درباره ما</h3>
                                            <div class="separator"></div>
                                        </div>

                                        <div class="single_about">
                                            <div class="single_ab_icon">
                                                <div class="ab_border_right"></div>

                                            </div>
                                            <div class="single_ab_text">
                                                <h3>@if(\App\About::first()!= null ){{\App\About::first()->title}}@endif</h3>
                                                <p>@if(\App\About::first()!= null ){{\App\About::first()->body}}@endif</p>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="single_about_left_img margin-top-40 text-center wow fadeInLeft" data-wow-duration=".6s">
                                        <img src="@foreach(\App\About::all() as $about){{asset("storage/image/{$about->imageName}")}}@endforeach" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="about_skill_area">
                                    <div class="col-sm-6">
                                        <div class="about_tabe">
                                            <!-- Nav tabs -->
                                            <ul class="about_tabe_menu" role="tablist">
                                                <li role="presentation" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">ماموریت ما</a></li>
                                                <li role="presentation"><a href="#goal" aria-controls="goal" role="tab" data-toggle="tab">هدف ما</a></li>
                                                <li role="presentation"><a href="#achivements" aria-controls="achivements" role="tab" data-toggle="tab">دستاوردها</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="mission">
                                                    <div class="single_about_tab">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                            برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد ,
                                                            در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد.
                                                            وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی ,</p>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="goal">
                                                    <div class="single_about_tab">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                            برای طراحان رایانه ای و فرهنگ پیشرو در ز موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد.
                                                            وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی ,</p>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="achivements">
                                                    <div class="single_about_tab">
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                            برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد ,
                                                            در این صورت می توان امید داشت که تمام و دشواردر زبان فارسی ایجاد کرد ,
                                                            در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد.
                                                            وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی ,</p>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul class="single_ab_mision">
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                    <li><i class="fa fa-check-square"></i> ما فقط رضایت مشتری رامی خواهیم</li>
                                                                </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="about_skill">
                                            <div class="skillbar" data-percent="79%">
                                                <div class="skillbar-title"><h3 class="blue">فتوشاپ</h3><span class="sm-text">79%</span></div>
                                                <div class="skillbar-bar blue"></div>
                                            </div>

                                            <div class="skillbar" data-percent="90%">
                                                <div class="skillbar-title"><h3 class="blue">HTML/CSS</h3><span class="sm-text">90%</span></div>
                                                <div class="skillbar-bar blue"></div>
                                            </div>

                                            <div class="skillbar" data-percent="69%">
                                                <div class="skillbar-title"><h3 class="blue">جاوا اسکریپت</h3><span class="sm-text">69%</span></div>
                                                <div class="skillbar-bar blue"></div>
                                            </div>

                                            <div class="skillbar" data-percent="92%">
                                                <div class="skillbar-title"><h3 class="blue">ورد پرس</h3><span class="sm-text">92%</span></div>
                                                <div class="skillbar-bar blue"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-images ">

        <div class="height">
            <!-- <section id="counter" class="counter">
                 <div class="video_overlay">-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_counter_area text-center">

                            <div class="row">
                                <div class="single_counter border_right">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <h2 class="statistic-counter">561548</h2>
                                            <i class="icon icon-thumbs-up"></i>
                                            <p class="margin-top-20">طراحی </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <h2 class="statistic-counter">2596</h2>
                                            <i class="icon icon-business-3"></i>
                                            <p class="margin-top-20">جایزه</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <h2 class="statistic-counter">23647</h2>
                                            <i class="icon icon-people-32"></i>
                                            <p class="margin-top-20">مشتریان راضی</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <h2 class="statistic-counter">36568</h2>
                                            <i class="icon icon-cup"></i>
                                            <p class="margin-top-20">فنجان قهوه</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--</div>
</section>  <!-- End of counter section -->


    <section id="othersservice" class="othersservice">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_othersservice_area sections">
                        <div class="row">
                            <div class="head_title">
                                <h3>خدمات</h3>
                                <div class="separator"></div>
                            </div>

                            <div class="main_othersservice_content">
                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4><span><i class="fa fa-clock-o"></i></span> طراحی خلاقانه</h4>
                                        </div>
                                        <div class="single_othersservice_content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4> <span><i class="fa fa-picture-o"></i></span> توسعه وب</h4>
                                        </div>
                                        <div class="single_othersservice_content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4> <span><i class="fa fa-television"></i></span> ویرایش ویدئو</h4>
                                        </div>
                                        <div class="single_othersservice_content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4> <span><i class="fa fa-object-group"></i></span> بازار یابی</h4>
                                        </div>
                                        <div class="single_othersservice_content">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="single_othersservice_icon">
                                            <h4> <span><i class="fa fa-object-group"></i></span> عکاسی</h4>
                                        </div>
                                        <div class="single_othersservice_content">

                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="single_othersservice">
                                        <div class="s_ot_i_area">
                                            <div class="single_othersservice_icon">
                                                <h4><span><i class="fa fa-object-group"></i></span> طراحی لوگو</h4>
                                            </div>
                                        </div>
                                        <div class="single_othersservice_content">

                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- <section id="team" class="team">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="main_team sections">
                         <div class="row">
                             <div class="head_title">
                                 <h3>تیم</h3>
                                 <div class="separator"></div>
                             </div>
                             <div class="col-sm-3 col-xs-12">
                                 <div class="single_team_content">
                                     <div class="single_team_img">
                                         <img src="assets/images/team1.jpg" alt="" />
                                     </div>
                                     <div class="single_team_text_overlay">
                                         <h4> سامی دلیری</h4>
                                         <p>موسس</p>
                                         <div class="team_overlay_socail">
                                             <a href=""><i class="fa fa-facebook"></i></a>
                                             <a href=""><i class="fa fa-twitter"></i></a>
                                             <a href=""><i class="fa fa-google-plus"></i></a>
                                             <a href=""><i class="fa fa-pinterest-p"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-3 col-xs-12">
                                 <div class="single_team_content">
                                     <div class="single_team_img">
                                         <img src="assets/images/team2.jpg" alt="" />
                                     </div>
                                     <div class="single_team_text_overlay">
                                         <h4>اردلان یوسفی</h4>
                                         <p>مهندسی</p>
                                         <div class="team_overlay_socail">
                                             <a href=""><i class="fa fa-facebook"></i></a>
                                             <a href=""><i class="fa fa-twitter"></i></a>
                                             <a href=""><i class="fa fa-google-plus"></i></a>
                                             <a href=""><i class="fa fa-pinterest-p"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-3 col-xs-12">
                                 <div class="single_team_content">
                                     <div class="single_team_img">
                                         <img src="assets/images/team3.jpg" alt="" />
                                     </div>
                                     <div class="single_team_text_overlay">
                                         <h4>میلاد ترابی</h4>
                                         <p>طراحی</p>
                                         <div class="team_overlay_socail">
                                             <a href=""><i class="fa fa-facebook"></i></a>
                                             <a href=""><i class="fa fa-twitter"></i></a>
                                             <a href=""><i class="fa fa-google-plus"></i></a>
                                             <a href=""><i class="fa fa-pinterest-p"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-sm-3 col-xs-12">
                                 <div class="single_team_content">
                                     <div class="single_team_img">
                                         <img src="assets/images/team4.jpg" alt="" />
                                     </div>
                                     <div class="single_team_text_overlay">
                                         <h4>بتی</h4>
                                         <p>بازاریابی</p>
                                         <div class="team_overlay_socail">
                                             <a href=""><i class="fa fa-facebook"></i></a>
                                             <a href=""><i class="fa fa-twitter"></i></a>
                                             <a href=""><i class="fa fa-google-plus"></i></a>
                                             <a href=""><i class="fa fa-pinterest-p"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div> <!-- End of col-sm-4
                         </div>

                     </div><!-- End of main team contant -
                 </div>
             </div><!-- End of row --
         </div>
     </section>-->


    <section id="choose" class="choose">
        <div class="container">
            <div class="row">
                <div class="main_choose sections">
                    <div class="col-sm-6">
                        <div class="head_title">
                            <h3>چرا انتخاب ما</h3>
                            <div class="separator"></div>
                        </div>
                        <div class="single_choose">
                            <div class="single_choose_acording">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                    <i class="fa fa-picture-o"></i> طرح بزرگ
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.
                                                و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی.
                                                در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را.
                                                برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-map-signs"></i> طراحی تعاملی
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.
                                                و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی.
                                                در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را.
                                                برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-bullseye"></i> پشتیبانی آنلاین
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.
                                                و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی.
                                                در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را.
                                                برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-umbrella"></i>فونت رایگان گوگل
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.
                                                و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی.
                                                در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را.
                                                برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-subway"></i>1170 پیکسل GRID BASE
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.
                                                و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی.
                                                در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را.
                                                برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود .
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single_choose">
                            <div class="single_choose_img">
                                <img src="assets/images/choose.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="portfolio" class="portfolio lightbg">
        <div class="container">
            <div class="row">
                <div class="main_portfolio sections">
                    <div class="col-sm-4">
                        <div class="head_title">
                            <h3>آخرین پروژه ها</h3>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-2">
                        <div id="filters" class="toolbar mb2 mt2">
                            <button class="btn-md fil-cat filter active" href=""  data-filter="all">نمایش همه</button>
                            <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">عکاسی</button>
                            <button class="btn-md fil-cat filter" data-rel="flyers" data-filter=".flyers">برندها</button>
                            <button class="btn-md fil-cat filter" data-rel="bcards" data-filter=".bcards">طراحی گرافیک</button>
                            <div class="separator2"></div>
                        </div>

                    </div>

                    <div style="clear:both;"></div>
                    <div id="portfoliowork">
                        <div class="single_portfolio tile scale-anm web grid-item-width2" >
                            <img src="{{asset("assets/images/pf1.jpg")}}" alt="" />
                            <div class="grid_item_overlay g_overlay_1">
                                <a href="{{asset("assets/images/pf1.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards" >
                            <img src="{{asset("assets/images/pf2.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf2.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm web ">
                            <img src="{{asset("assets/images/pf3.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf3.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm web" >
                            <img src="{{asset("assets/images/pf4.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf4.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards" >
                            <img src="{{asset("assets/images/pf8.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf8.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm web" >
                            <img src="{{asset("assets/images/pf9.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf9.jpg")}}" class="portfolio-img">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm flyers">
                            <img src="{{asset("assets/images/pf5.jpg")}}" alt="" />
                            <div class="grid_item_overlay g_overlay_2">
                                <a href="{{asset("assets/images/pf5.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm flyers">
                            <img src="{{asset("assets/images/pf6.jpg")}}" alt="" />
                            <div class="grid_item_overlay g_overlay_1">
                                <a href="{{asset("assets/images/pf6.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <div class="single_portfolio tile scale-anm bcards" >
                            <img src="{{asset("assets/images/pf7.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf7.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="single_portfolio tile scale-anm flyers">
                            <img src="{{asset("assets/images/stab1.jpg")}}" alt="" />
                            <div class="grid_item_overlay g_overlay_1">
                                <a href="{{asset("assets/images/stab1.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <div class="single_portfolio tile scale-anm bcards" >
                            <img src="{{asset("assets/images/pf11.jpg")}}" alt="" />
                            <div class="grid_item_overlay">
                                <a href="{{asset("assets/images/pf11.jpg")}}" class="portfolio-img"> <i class="fa fa-search"></i></a>
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>



                    </div>

                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </section>






    <!--            <section id="portfolio" class="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="main_portfolio sections">
                                <div class="heading_filter_menu">
                                    <div class="col-sm-4">
                                        <div class="head_title">
                                            <h3>LATEST PROJECT</h3>
                                            <div class="separator"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="filters" class="toolbar mb2 mt2">
                                            <button class="btn fil-cat filter active" href=""  data-filter="all">All</button>
                                            <button class="btn fil-cat filter" data-rel="web" data-filter=".web">Websites</button>
                                            <button class="btn fil-cat filter" data-rel="flyers" data-filter=".flyers">Flyers</button>
                                            <button class="btn fil-cat filter" data-rel="bcards" data-filter=".bcards">Business Cards</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="main_portfolio_content text-center">
                                    <div class="grid">
                                        <div class="grid-item grid-item--width2">
                                            <img src="assets/images/pf1.jpg" alt="" />
                                            <div class="grid_item_overlay all_overlay">
                                                <a href="assets/images/pf1.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf2.jpg" alt="" />
                                            <div class="grid_item_overlay all_overlay">
                                                <a href="assets/images/pf2.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf3.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf1.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf4.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf4.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf5.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf5.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item grid-item--width2">
                                            <img src="assets/images/pf6.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf7.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf8.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf6.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="grid-item ">
                                            <img src="assets/images/pf9.jpg" alt="" />
                                            <div class="grid_item_overlay">
                                                <a href="assets/images/pf7.jpg" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->


    <section id="testimonial" class="testimonial">
        <div class="video_overlay">
            <!--<div class="container">-->
            <div class="row">
                <div class="main_testimonial sections text-center">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="main_teastimonial_slider text-center">

                            <div class="single_testimonial">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <i class="fa fa-quote-left"></i>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز .
                                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                            حال و آینده شناخت فراوان جامعه و متخصصان را</p>
                                        <div class="single_test_author">
                                            <h4>مژگان سیروانی <span> --مدیرعامل شرکت</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testimonial">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <i class="fa fa-quote-left"></i>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز .
                                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                            حال و آینده شناخت فراوان جامعه و متخصصان را</p>
                                        <div class="single_test_author">
                                            <h4>مژگان سیروانی <span> --مدیرعامل شرکت</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_testimonial">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <i class="fa fa-quote-left"></i>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز .
                                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                            حال و آینده شناخت فراوان جامعه و متخصصان را</p>
                                        <div class="single_test_author">
                                            <h4>مژگان سیروانی <span> --مدیرعامل شرکت</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- </div>-->
        </div>
    </section>


    <section id="clogo" class="clogo">
        <div class="container">
            <div class="row">
                <div class="main_clogo sections text-center">
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo1.png")}}" alt="" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo2.png")}}" alt="" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo3.png")}}" alt="" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo4.png")}}" alt="" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo5.png")}}" alt="" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <a href=""><img src="{{asset("assets/images/clogo9.png")}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="contact_contant sections">
                            <div class="col-sm-6">

                                <div class="main_contact_info">
                                    <div class="head_title">
                                        <h3>اطلاعات تماس</h3>
                                        <div class="separator"></div>
                                    </div>
                                    <div class="row">
                                        <div class="contact_info_content">
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_icon">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="single_info_text">
                                                        <h3>آدرس شرکت</h3>
                                                        <p>@if(\App\Contact::first()!= null ){{\App\Contact::first()->address}}@endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_icon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </div>
                                                    <div class="single_info_text">
                                                        <h3>ایمیل</h3>
                                                        <p>@if(\App\Contact::first()!= null ){{\App\Contact::first()->email}}@endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_icon">
                                                        <i class="fa fa-mobile"></i>
                                                    </div>
                                                    <div class="single_info_text">
                                                        <h3>تلفن تماس</h3>
                                                        <p class="phone">@if(\App\Contact::first()!= null ){{\App\Contact::first()->phone}}@endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_icon">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                    <div class="single_info_text">
                                                        <h3>ساعت کاری</h3>
                                                        <p>@if(\App\Contact::first()!= null ){{\App\Contact::first()->dateOfWork}}@endif</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="head_title">
                                    <h3>پیغام بگذارید</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="single_contant_left">
                                    <form action="/send/message" id="formid" method="post">
                                        <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="firstName" placeholder="نام" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lastName" placeholder="نام خانوادگی" required="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="ایمیل" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" placeholder="موضوع" required="">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="8" placeholder="پیام" required=""></textarea>
                                        </div>

                                        <div class="">
                                            <input type="submit" value="ارسال" class="btn btn-primary">
                                        </div>
                                        <!--</div>-->
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>  <!-- End of contact section -->



    <section id="maps" class="maps">
        <div class="map-overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_maps text-center">
                        <div class="col-sm-12 no-padding">
                            <div class="map_canvas_icon">
                                <i class="fa fa-map-marker" onClick="showmap()"></i>
                                <h2 onClick="showmap()">پیدا کردن ما در نقشه گوگل</h2>
                            </div>
                            <div id="map_canvas"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="footer" class="footer_widget">
        <div class="video_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="main_widget">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                        <div class="footer_logo">
                                            <img src="{{asset("assets/images/logo.png")}}" alt="" />
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
                                            دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>

                                    </div>
                                </div>

                                <div class="col-sm-3  col-xs-12">
                                    <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                        <div class="footer_title">
                                            <h4>نقشه سایت</h4>
                                            <div class="separator"></div>
                                        </div>
                                        <ul>
                                            <li><a href="">خدمات</a></li>
                                            <li><a href="">درباره ما</a></li>
                                            <li><a href="">تیم</a></li>
                                            <li><a href="">نمونه کارها</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-3  col-xs-12">
                                    <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                        <div class="footer_title">
                                            <h4>آرشیو</h4>
                                            <div class="separator"></div>
                                        </div>
                                        <ul>
                                            <li><a href="">ژانویه 2015</a></li>
                                            <li><a href="">فوریه 2015</a></li>
                                            <li><a href="">مارس 2015</a></li>
                                            <li><a href="">آوریل 2015</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_widget wow fadeIn" data-wow-duration="800ms">

                                        <div class="footer_title">
                                            <h4>خبرنامه</h4>
                                            <div class="separator"></div>
                                        </div>

                                        <div class="footer_subcribs_area">
                                            <p>برای اطلاع از آخرین اخبار سایت عضو شوید.</p>
                                            <form class="navbar-form navbar-left" role="search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="جستجو">
                                                    <button type="submit" class="submit_btn"></button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_footer">
                        <div class="row">

                            <div class="col-sm-6 col-xs-12">
                                <div class="copyright_text">
                                    <p class=" wow fadeInRight" data-wow-duration="1s">طراح وب ثمر<i class="fa fa-heart"></i>توسط :  <a href="">کارا تم</a>2016 تمامی حقوق محفوظ.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="flowus">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









</div>

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="{{asset("assets/js/vendor/jquery-1.11.2.min.js")}}"></script>
<script src="{{asset("assets/js/vendor/bootstrap.min.js")}}"></script>

<script src="{{asset("assets/js/jquery.magnific-popup.js")}}"></script>
<script src="{{asset("assets/js/jquery.mixitup.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.easing.1.3.js")}}"></script>
<script src="{{asset("assets/js/jquery.masonry.min.js")}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="{{asset("assets/js/gmaps.min.js")}}"></script>


<script>

    function showmap() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(-34.397, 150.644),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    }
</script>

<script src="{{asset("assets/js/plugins.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>

</body>
</html>
