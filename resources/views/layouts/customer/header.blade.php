 <header id="header">
     <!--header-->
     <div class="header_top">
         <!--header_top-->
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="contactinfo">
                         <ul class="nav nav-pills">
                             <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                             <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="social-icons pull-right">
                         <ul class="nav navbar-nav">
                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                             <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--/header_top-->

     <div class="header-middle">
         <!--header-middle-->
         <div class="container">
             <div class="row">
                 <div class="col-sm-4">
                     <div class="logo pull-left">
                         <a href="{{ route('customer.home') }}"><img src="{{ 'frontend/images/logo.png' }}"
                                 alt="" /></a>
                     </div>
                     <div class="btn-group pull-right">
                         <div class="btn-group">
                             <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                 USA
                                 <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a href="#">Canada</a></li>
                                 <li><a href="#">UK</a></li>
                             </ul>
                         </div>

                         <div class="btn-group">
                             <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                 DOLLAR
                                 <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a href="#">Canadian Dollar</a></li>
                                 <li><a href="#">Pound</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-8">
                     <div class="shop-menu pull-right">
                         <ul class="nav navbar-nav">
                             <li title="y??u th??ch"><a href="#"><i class="fa fa-star"></i></a></li>
                             <li title="gi??? h??ng">
                                 <a class="cart-customer" href="{{ route('customer.cart') }}">
                                     <i class="fa fa-shopping-cart"></i>
                                     @php
                                         $customer_id = session()->get('customer_id') ?? null;
                                     @endphp
                                     @if ($customer_id)
                                         <span id="cart-quantity">
                                             @php
                                                 $cart = session()->get('cart') ?? [];
                                                 if (sizeof($cart) > 0) {
                                                     $cart_customer = $cart[$customer_id];
                                                     echo sizeof($cart_customer);
                                                 } else {
                                                     echo 0;
                                                 }
                                             @endphp
                                         </span>
                                     @endif
                                 </a>
                             </li>
                             {{-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li> --}}
                             @if (session()->get('customer_id'))
                                 {{-- <li><a href="{{ route('customer.logout') }}"><i class="fa fa-user"></i> ????ng xu???t</a> --}}
                                 @if (session()->get('shipping_id'))
                                     <li><a href="{{ route('customer.payment') }}"><i class="fa fa-crosshairs"></i>Thanh
                                             to??n</a></li>
                                 @else
                                     <li><a href="{{ route('customer.checkout') }}"><i
                                                 class="fa fa-crosshairs"></i>Th??ng tin thanh to??n</a></li>
                                 @endif
                                 </li>
                                 <li><a href="{{ route('customer.logout') }}"><i class="fa fa-user"></i> ????ng xu???t</a>
                                 @else
                                 <li><a href="{{ route('customer.login') }}"><i class="fa fa-user"></i> ????ng nh???p</a>
                                 </li>
                             @endif

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--/header-middle-->

     <div class="header-bottom">
         <!--header-bottom-->
         <div class="container">
             <div class="row">
                 <div class="col-sm-9">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target=".navbar-collapse">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     </div>
                     <div class="mainmenu pull-left">
                         <ul class="nav navbar-nav collapse navbar-collapse">
                             <li><a href="{{ route('customer.home') }}" class="active">Trang ch???</a></li>
                             <li class="dropdown"><a href="#">S???n ph???m<i class="fa fa-angle-down"></i></a>
                                 <ul role="menu" class="sub-menu">
                                     <li><a href="shop.html">S???n ph???m</a></li>
                                 </ul>
                             </li>
                             <li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>
                                 <ul role="menu" class="sub-menu">
                                     <li><a href="blog.html">Blog List</a></li>
                                 </ul>
                             </li>
                             <li><a href="contact-us.html">Li??n h???</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-sm-3">
                     <div class="search_box pull-right">
                         <form><input type="search" placeholder="t??m ki???m s???n ph???m" name="q"
                                 value="{{ ucfirst($search ?? '') }}" />
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--/header-bottom-->
 </header>
 <!--/header-->
