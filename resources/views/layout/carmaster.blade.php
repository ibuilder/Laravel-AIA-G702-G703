<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creating AIA</title>
    <!-- Start:base css -->
    <link rel="stylesheet" href="{{asset('public/assets/cars/vendors/base/vendors.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/cars/demo/default/base/style.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/animated/animate.min.css')}}">
    <!-- end: base css  -->
    {{-- start: custom css --}}
    <link rel="stylesheet" href="{{asset('public/assets/cars/custom.css')}}">
    {{-- end: custom css --}}
    <link rel="shortcut icon" href="{{asset('public/favicon.png')}}" />
    <style>
        *{
            font-family: 'proxima-nova', sans-serif;
        }
        /*.search-input-a{
            border: 1px solid #45dabc;
            -webkit-box-shadow: 0 1px 15px 1px rgba(113,106,202,.08);
            -moz-box-shadow: 0 1px 15px 1px rgba(113,106,202,.08);
            box-shadow: 0 1px 15px 1px rgba(113,106,202,.08)
        }*/
        .iostate>thead>tr>th,.iostate>tbody>tr>td{
            background:white;
        }
        .underline-text{
            text-decoration: underline !important;
        }
        .form-control,.input-group-addon {
            border-radius: 0px !important;
        }

        .div-group{
            background: white;
            border-radius: 10px;
            -webkit-box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
            -moz-box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
            box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
        }
        .m-portlet.m-portlet--tabs{
            border-radius: 12px;
        }


        .shadow-group{
                -webkit-box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
            -moz-box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
            box-shadow: 6px 6px 21px -9px rgba(0,0,0,0.75);
        }
        .nav-link.m-tabs__link{
            font-size: 22px;
            padding-bottom: 0px !important;
        }
        .input-group.m-input-group>.input-group-addon{
            padding-left: 0px !important;

        }
        .left-padding-no{
            padding-left:0px !important;
        }
        .m-datatable__pager-detail{
            display: none !important;
        }
        .search-input-a{
            border:none !important;
        }
       /* .search-input-a:hover,.form-control.m-input--solid:focus{
            border:none !important;
        }*/
        .two-table-bg{
            background: white;
            border-radius: 12px;


        }
        .search-input-a>.form-control.m-input--solid:focus {
            border-radius: 20px !important;
            border-color:#6f6f6f !important;
        }
        .search-input-a>.m-input:hover,.search-input-a>.m-input:acvite,.search-input-a>.form-control.m-input--solid:focus {
            border-radius: 20px !important;
            border-color:#d4d4d4  !important;
            box-shadow: 0 3px 20px 0 rgba(113,106,202,.11);
        }
        .search-input-a>.m-input{
            background-color: white !important;
            border-radius: 20px !important;
            box-shadow: 0 3px 20px 0 rgba(113,106,202,.11);
        }
        .m-datatable.m-datatable--default>.m-datatable__table>.m-datatable__body .m-datatable__row>.m-datatable__cell>span{
            text-overflow: clip !important;
            overflow: none;
        }

      .company-style{
         /*   padding-right: 70% !important;*/
         width: 80%;
         justify-content: unset !important;

        }
    .load_ctn{
        z-index: 15;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, .8);
        width: 100%;
        height: 100%;

    }

    .m-loader.m-loader--primary{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;

    }
    .m-loader:before{
        width: 5.4rem !important;
        height: 5.4rem !important;
    }





    </style>
  </head>
  <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default m-brand--minimize m-aside-left--minimize"  >
    <!-- begin:: Page -->
    <div class="load_ctn">
        <div class="m-loader m-loader--primary" style="width: 30px; display: inline-block;"></div>
    </div>
    <div class="m-grid m-grid--hor m-grid--root m-page " >
        <!-- BEGIN: Header -->
        <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" style="background-image: url('{{asset('public/assets/images/main-bg.jpg')}}')" >
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark " style="background: rgba(255,255,255,0.88);">
                        <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="{{url('/')}}" class="m-brand__logo-wrapper">
                                <img alt="" src="{{asset('public/assets/cars/demo/default/media/img/logo/logo_default_dark.png')}}"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
                ">
                                <span></span>
                            </a>
                            <!-- END -->
                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->

                        </div>


                            <!-- <div class="m-stack__item m-stack__item--middle m-brand__logo">

                                    <img alt="" src="{{asset('public/assets/cars/demo/default/media/img/logo/logo_default_dark.png')}}"/>

                            </div> -->

                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                            <h4 style="padding-top: 25px;
                            padding-left: 41px;">
                                {{-- @if(isset($selbtn) && $selbtn == 1)
                                    Neues Fahrzeug einbuchen
                                @elseif($selbtn == 2)
                                    Kundendaten
                                @elseif($selbtn == 3)
                                    Alle Fahrzeuge
                                @elseif($selbtn == 4)
                                Mein Bestand
                                @elseif($selbtn == 5)
                                Ein- und Verkauf
                                @elseif($selbtn == 6)
                                Gewinn- und Verlust
                                @endif --}}



                             </h4>
                        </div>
                        <!-- END: Horizontal Menu -->
                        {{-- Start: top bar --}}
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
                                                <img src="{{asset('public/assets/cars/app/media/img/users/user4.png')}}" class="m--img-rounded m--marginless m--img-centered" alt="">
												</span>
												<span class="m-topbar__username m--hide">
													Nick
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url('{{asset('public/assets/cars/app/media/img/misc/user_profile_bg.jpg')}}'); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="{{asset('public/assets/cars/app/media/img/users/user4.png')}}" class="m--img-rounded m--marginless" alt="">
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
                                                                    Administrator
																</span>
																<!-- <a href="#" class="m-card-user__email m--font-weight-300 m-link">
																	administrator
																</a> -->
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
                                                                <a href="{{url('logout')}}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Logout
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										{{-- <li id="m_quick_sidebar_toggle" class="m-nav__item">

										</li> --}}
									</ul>
								</div>
							</div>
                        {{-- END: top bar --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"     style="background-image: url('{{asset('/public/assets/images/main-bg.jpg')}}')">
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark " style="background: rgba(255,255,255,0.88);">
                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu"
                    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                    data-menu-vertical="true"
                     data-menu-scrollable="false" data-menu-dropdown-timeout="500"
                    >
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                            <a  href="{{url('index')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon fa fa-plus-circle" style="font-size: 23px;"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                    <span class="m-menu__link-text @if($selbtn == '1')underline-text @endif">
                                                New AIA
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                            <a  href="{{url('/itemlist')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon"><img src="{{url('public/assets/cars/app/media/img/icons/profit.svg')}}"  width="18px" /></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text @if($selbtn == '3')underline-text @endif">
                                            List
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                            <a  href="{{url('logout')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-sign-out"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text @if($selbtn == '6')underline-text @endif">
                                            Logout
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        {{-- <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                        <a  href="{{url('address')}}" class="m-menu__link ">
                                <i class="m-menu__link-icon ">
                                    <img src="{{url('public/assets/cars/app/media/img/icons/user.svg')}}"  width="20px" />
                                </i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text @if($selbtn == '2')underline-text @endif">
                                            Kundendaten
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li> --}}



                    </ul>
                </div>
                <!-- END: Aside Menu -->

            </div>

            <!-- END: Left Aside -->

            <div class="m-grid__item m-grid__item--fluid m-wrapper" >
                @yield('main')
            </div>



            </div>
        </div>
        <!-- end:: Body -->

    </div>
    <!-- end:: Page -->
                <!-- begin::Quick Sidebar -->
    <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
        <div class="m-quick-sidebar__content m--hide">
            <span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
                <i class="la la-close"></i>
            </span>
            <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                        Messages
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                        Settings
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                        Logs
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <!-- end::Quick Sidebar -->
    <!-- begin::Scroll Top -->
    <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->

    <!--begin::Base Scripts -->
    <script src={{asset('public/assets/cars/vendors/base/vendors.bundle.js')}} type="text/javascript"></script>
    <script src={{asset('public/assets/cars/demo/default/base/scripts.bundle.js')}} type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('.load_ctn').fadeOut();
        })
    </script>

    <!--end::Base Scripts -->

    <!--begin::Page Snippets -->
    @yield('script')

    <!--end::Page Snippets -->
</body>
</html>
