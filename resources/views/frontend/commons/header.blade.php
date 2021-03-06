<!-- HEADER -->
@php
    use Illuminate\Support\Facades\Auth;
@endphp
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +84 (222)
                                222-222
                            </li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            @auth
                                <li>
                                    <i class="ti-user"></i> <a
                                        href="#">{{ Auth::user()->name }}</a>
                                </li>
                                <li>
                                    <i class="ti-power-off"></i><a
                                        href="{{ route('fr.auth.logout') }}">Logout</a>
                                </li>
                            @endauth
                            @guest
                                <li>
                                    <i class="ti-power-off"></i><a
                                        href="{{ route('fr.auth.login') }}">Login</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img
                                src="{{asset('uploads/images/banners/logo.png')}}"
                                alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i
                                    class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..."
                                       name="search">
                                <button value="search" type="submit"><i
                                        class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">All Category
                                </option>
                                <option>Category 01</option>
                                <option>Category 02</option>
                                <option>Category 03</option>

                            </select>
                            <form>
                                <input name="search"
                                       placeholder="Search Products Here....."
                                       type="search">
                                <button class="btnn"><i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i
                                    class="fa fa-heart-o"
                                    aria-hidden="true"></i></a>
                        </div>

                        <div class="sinlge-bar shopping">
                            <a href="#" class="single-icon"><i
                                    class="ti-bag"></i> <span
                                    class="total-count">2</span></a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>{{$cart->products->count()}} Items</span>
                                    <a href="{{ route('fr.cart') }}">View
                                        Cart</a>
                                </div>
                                <ul class="shopping-list">
<<<<<<< HEAD
                                    @forelse($cart->products as $product)
                                        <li>
                                            <a class="cart-img" href="{{ route('fr.product.show',
                                        ['slug' => $product->slug, 'id' => $product->id]) }}"><img
                                                    src="{{ $product->image_full_path }}"
                                                    alt="#"></a>
                                            <h4>
                                                <a href="{{ route('fr.product.show',
                                        ['slug' => $product->slug, 'id' => $product->id]) }}">{{ $product->name }}</a>
                                            </h4>
                                            <p class="quantity">{{ $product->pivot->quantity }}
                                                - <span class="amount">
                                                  {{ $product->getTotalPrice() }} VND
                                                </span></p>
                                        </li>
                                    @empty
                                        Không có sản phẩm trong giỏ hàng
                                    @endforelse
=======
                                    <li>
                                        <a href="#" class="remove"
                                           title="Remove this item"><i
                                                class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img
                                                src="https://via.placeholder.com/70x70"
                                                alt="#"></a>
                                        <h4><a href="#">Woman Ring</a></h4>
                                        <p class="quantity">1x - <span
                                                class="amount">$99.00</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="remove"
                                           title="Remove this item"><i
                                                class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img
                                                src="https://via.placeholder.com/70x70"
                                                alt="#"></a>
                                        <h4><a href="#">Woman Necklace</a></h4>
                                        <p class="quantity">1x - <span
                                                class="amount">$35.00</span></p>
                                    </li>
>>>>>>> 3dda139bc49053507fd1815e1aecf27361f4867c
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span
<<<<<<< HEAD
                                            class="total-amount">{{ $cart->totalMoney() }} VND</span>
=======
                                            class="total-amount">$134.00</span>
>>>>>>> 3dda139bc49053507fd1815e1aecf27361f4867c
                                    </div>
                                    <form
                                        action="{{ route('fr.cart.checkout') }}"
                                        method="post">
                                        @csrf
                                        <input type="hidden" name="cart_id"
                                               value="{{ $cart->id }}">
                                        <button type="submit"
                                                @if(!$cart->products->count())
                                                disabled
                                                @endif
                                                class="btn animate">Checkout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--/ End Shopping Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    {{--    <div class="col-lg-3">
                          <div class="all-category">
                              <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục</h3>
                              <ul class="main-category">
                                  <li><a href="#">Báo cháy HOCHIKI <i class="fa fa-angle-right" ></i></a>
                                      <ul class="sub-category dropdown">
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                          <li><a href="#"> TRUNG TÂM BÁO CHÁY ĐỊA CHỈ HOCHIKI</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                                  <li><a href="#">Báo cháy HOCHIKI</a></li>
                              </ul>
                          </div>
                      </div>  --}}
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a
                                                    href="{{route('fr.home')}}">TRANG
                                                    CHỦ</a></li>
                                            <li><a href="#">DANH MỤC</a>

                                                <ul class="dropdown">
                                                    @foreach($categories as $category)
                                                        <li>
                                                            <a href="{{ route('fr.category.product', [$category->slug,$category->id]) }}">{{$category->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                            </li>

                                            <li><a href="#">Shop<i
                                                        class="ti-angle-down"></i><span
                                                        class="new">New</span></a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="shop-grid.html">Shop
                                                            Grid</a></li>
                                                    <li>
                                                        <a href="{{route('fr.cart')}}">Cart</a>
                                                    </li>
                                                    <li><a href="checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">GIỚI THIỆU</a></li>

                                            <li><a href="contact.html">ĐỊA
                                                    CHỈ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->
<!-- /HEADER -->

