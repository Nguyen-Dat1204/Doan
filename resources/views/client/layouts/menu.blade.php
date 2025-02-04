    <!-- header -->
@section('head')
@endsection

<!-- Messenger Plugin chat Code -->


    <div class="header">
        <div class="header-bottom container">
            <div class="wrap-content d-flex align-items-center justify-content-between flex-wrap">
                <a href="/" class="d-flex align-items-center m mb-2 mb-lg-0 text-white text-decoration-none col-md-2 col-lg-2">
                    <img src="/asset/img/Logo.png" alt=""height="100%" width="100%">
                </a>
                <div class="search col-md-4 col-lg-5">
                    <form action="{{route('search')}}" method="GET">
                        <input type="text" id="keyword" name="search" placeholder="Nhập từ khóa tìm kiếm">
                        <span><button class="fas fa-search"  type="submit"></button></span>
                    </form>
                </div>
                {{-- tìm kiếm --}}
                <script>
                    var path = "{{ route('autocomplete') }}";
                    $('#keyword').typeahead({
                        source: function(query, process){
                            return $.get(path, {query:query}, function(data){
                                return process(data);
                            });
                        }
                    });
                </script>
                <div class="hotline-right d-flex align-items-center justify-content-between col-lg-5 col-md-6">
                    <a href="tel:0788911668 " class="hotline-header d-flex align-items-center justify-content-between ">
                        <i class="fas fa-phone icon "></i>
                        <div class="combo-right ">
                            <p>Hotline tư vấn:</p>
                            <span>0938103176</span>
                        </div>
                    </a>
                    <a class="cart-header d-flex align-items-center justify-content-between " href="/gio-hang">
                        <i class="fas fa-shopping-cart icon "></i>
                        <div class="combo-right ">
                            <p>Giỏ hàng:</p>
                            <label>(<span class="count-cart ">{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}</span>) sản phẩm</label>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- phone -->
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0938103176" class="pps-btn-img">
                    <i style="color:#fff;font-size:25px;" class="fa fa-mobile"></i> </a>
            </div>
        </div>
    </div>
    {{-- <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="70" data-height="70"></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script> --}}

    <div id="fb-root"></div>

<!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat" style="transition: 0s">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "101091305965628");
    chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v14.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <!-- backtop -->
    <div class="icon_back_top">
        <a href="" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    </div>
    <!-- menu -->
    <header class="">
        <nav class="navbar navbar-expand-lg pt-0 pb-0 mb-0 border-0">
            <div class="container">
                <div class="cot1-menu">
                    <h3>Danh mục sản phẩm</h3>
                    <div class="list-menu show-menu ">
                        <ul>
                            
                            {!! \App\Helpers\Helper::menus($menu) !!}

                        </ul>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item ">
                            <a class="nav-link " href="/" title="Trang chủ ">Trang chủ
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"  href="/gioi-thieu" title="Giới thiệu ">Giới thiệu 
                            </a>
                        </li>   
                        <li class="nav-item ">
                            <a class="nav-link "  href="/danh-muc" title="Khuyến mãi ">Khuyến mãi
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/thanh-toan" title="Thanh toán ">Thanh toán
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/bao-hanh" title="Bảo hành ">Bảo hành
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/tin-tuc" title="Tin tức ">Tin tức
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/lien-he" title="Liên hệ ">Liên hệ
                            </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php $fullname =  explode(" ",Auth::user()->name);
                                        $lastName = array_pop($fullname);
                                        echo $lastName;
                                    ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="/setting" class="dropdown-item">Cài đặt</a>
                                    <a class=" dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Đăng xuất</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
