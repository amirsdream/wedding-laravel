@extends('base')

@section('dashboard')

    <div class="container">
        <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-side-nav pull-left" href="#"><i class="icon-reorder"></i> </a>
            <div class="brand pull-right"> <a href=""><span class="fontsize25">پنل مدیریت</span></a></div>
            <ul class="nav navbar-nav navbar-left  hidden-xs">
                <li class="dropdown user  hidden-xs">



                        <a href="/admin/signout"><i class="icon-key"></i> خروج</a>

                </li>
            </ul>

        </div>
    </div>
    <div class="wrapper">
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li > <a href="#"> <i class="icon-dashboard"></i> داشبورد </a> </li>
                    <li> <a href="/"> <i class="icon-home"></i>  خانه</a> </li>
                    <li> <a href="/add/admin"> <i class="icon-user"></i>  ساخت کاربر ادمین</a> </li>
                    <li> <a href="/show/messages"> <i class="icon-envelope-alt"></i> نمایش پیام ها </a> </li>
                    <li> <a href="/add/contact"> <i class="icon-phone"></i> فرم تماس با ما </a> </li>
                    <li><a href="/add/aboute"> <i class="icon-tasks"></i> فرم درباره ما </a> </li>
                    <li><a href="/add/order"> <i class="icon-tasks"></i> سفارشات ویژه </a> </li>
                    <li><a href="/add/"> <i class="icon-tasks"></i> طراحی </a> </li>

                    <li> <a href="#">  پکیج ها  <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/add/order"> <i class="icon-angle-right"></i> پکیج اول </a> </li>
                            <li> <a href="/add/order/two"> <i class="icon-angle-right"></i> پکیج دوم </a> </li>
                            <li> <a href="/add/order/three"> <i class="icon-angle-right"></i> پکیج سوم </a> </li>
                            <li> <a href="/add/order/four"> <i class="icon-angle-right"></i> پکیج چهارم </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">  اتاق   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/post/room"> <i class="icon-angle-right"></i> اضافه کردن اتاق </a> </li>
                            <li> <a href="/show/rooms"> <i class="icon-angle-right"></i> نمایش و ویرایش اتاق ها </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">  ترم   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/post/term"> <i class="icon-angle-right"></i> اضافه کردن ترم جدید </a> </li>
                            <li> <a href="/show/terms"> <i class="icon-angle-right"></i> نمایش و ویرایش ترم ها </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">  ترم و اتاق   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/post/termroom"> <i class="icon-angle-right"></i> اضافه کردن اتاق برای هر ترم  </a> </li>
                            <li> <a href="/show/termrooms"> <i class="icon-angle-right"></i> نمایش و ویرایش ترم ها و اتاق ها </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">  کاربران   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/show/users"> <i class="icon-angle-right"></i> ویرایش و نمایش اطلاعات کاربران </a> </li>
                            <li> <a href="/search/user"> <i class="icon-angle-right"></i> یافتن کاربران </a> </li>
                        </ul>
                    </li>
                    <li> <a href="#">  خرید   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/show/users/firstpayment"> <i class="icon-angle-right"></i> نمایش  خرید اول  </a> </li>
                            <li> <a href="/show/users/buy"> <i class="icon-angle-right"></i> نمایش  کاربرانی که تسویه کرده اند </a> </li>
                        </ul>
                    </li>

                    <li> <a href="#">  پست   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/delete/post"> <i class="icon-angle-right"></i>حذف پست </a> </li>
                            <li> <a href="/post/blog"> <i class="icon-angle-right"></i> پست جدید </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">  اسلایدر   <i class="arrow icon-angle-down static"></i></a>
                        <ul class="sub-menu " style="display: none;">
                            <li> <a href="/add/slider"> <i class="icon-angle-right"></i> اسلایدر جدید </a> </li>
                            <li> <a href="/delete/slider"> <i class="icon-angle-right"></i> حذف عکس های اسلایدر </a> </li>
                        </ul>
                    </li>









                </ul>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="content container">

                @yield('show-posts')
                @yield('add-rooms')
                @yield('add-terms')
                @yield('show-term')
                @yield('show-room')
                @yield('add-termrooms')
                @yield('upload')




                <p class="align-center">
                    @if(isset($stateSuccess))
                        {{$stateSuccess}}
                        @endif
                        @if(isset($success))
                            {{$success}}
                        @endif
                </p>

            </div>
        </div>
    </div>
    <div class="bottom-nav footer align-center"> 2013 &copy; Thin Admin by Riaxe Systems. </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->




@stop