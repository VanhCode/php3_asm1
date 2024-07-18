<header class="header-style-02">

    <!-- TOP ROW STARTS -->

    <div class="top-nav">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs">

                    <ul class="small-nav">

                        <li id="date"></li>

                        <li><a href="contact-us.html">Liên hệ</a></li>

                        <li><a class="popup-with-form" href="#signin">Đăng ký</a></li>

                        <li><a class="popup-with-form" href="#login" style="color: #000">Đăng nhập</a></li>

                    </ul>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">

                    <ul class="social-icons">

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-rss"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

                        <li><a href="#"><i class="fa fa-behance"></i></a></li>

                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- TOP ROW ENDS -->

    <!-- SIGNIN POPUP FORM STARTS -->

    <form id="signin" action="{{ route("auth.signin") }}" method="POST" class="white-popup-block mfp-hide">
        @csrf
        @method('POST')
        <fieldset>
            <h1>Đăng ký</h1>
            <h2>Đăng ký để đọc những tin tức mới nhất.</h2>
            <ul>
                <li>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Họ và tên"
                           required>
                </li>
                <li>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email"
                           required>
                </li>
                <li>
                    <input id="password" name="password" class="form-control" type="password" placeholder="Mật khẩu"
                           required>
                </li>
                <li><input class="btn btn-default" type='submit' value='Đăng ký'></li>
                <li><a class="popup-with-form" href="#login">Đăng nhập</a></li>
            </ul>
        </fieldset>
    </form>

    <form id="login" action="{{ route("auth.login") }}" method="POST" class="white-popup-block mfp-hide">
        @csrf
        @method('POST')
        <fieldset>
            <h1>Đăng nhập</h1>
            <h2>Xin chào, bạn có tài khoản chưa?</h2>
            <ul>
                <li>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email"
                           required>
                </li>
                <li>
                    <input id="password" name="password" class="form-control" type="password" placeholder="Mật khẩu"
                           required>
                </li>
                <li><input class="btn btn-default" type='submit' value='Đăng nhập'></li>
                <li><a class="popup-with-form" href="#forgotPass">Bạn quên mật khẩu?</a> <a class="popup-with-form" href="#signin">Đăng ký</a></li>
            </ul>
        </fieldset>
    </form>

    <form id="forgotPass" action="{{ route("password.email") }}" method="POST" class="white-popup-block mfp-hide">
        @csrf
        @method('POST')
        <fieldset>
            <h1>Quên mật khẩu</h1>
            <h2>Hãy nhập email để lấy lại mật khẩu.</h2>
            <ul>
                <li>
                    <input id="emailForgotPass" name="email" type="email" class="form-control" placeholder="Nhập email..."
                           required>
                </li>
                <li><input class="btn btn-default" type='submit' value='Gửi đi'></li>
                <li><a class="popup-with-form" href="#login">Đăng nhập</a> | <a class="popup-with-form" href="#signin">Đăng ký</a></li>
            </ul>
        </fieldset>
    </form>

    <!-- SIGNIN POPUP FORM ENDS -->

    <!-- LOGO & ADS STARTS -->

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo"><a href="{{ route('Client.home') }}"><img
                        src="{{ asset('blogs_theme/images/logo/logo.jpg') }}" alt="" class="img-responsive center-block"></a></div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <div class="ad-728x90 visible-lg visible-md"><img src="{{ asset('blogs_theme/images/ads/728x90/3d_728x90_v2.gif') }}" alt=""
                                                                  class="img-responsive center-block"></div>

                <div class="ad-468x60 visible-sm"><img src="{{ asset('blogs_theme/images/ads/468x60/3d_468x60_v4.gif') }}" alt=""></div>

            </div>

        </div>

    </div>

    <!-- LOGO & ADS ENDS -->

    <!-- NAVIGATION STARTS

        ========================================================================= -->

    <nav id="navigation">

        <div class="navbar yamm navbar-inverse" role="navigation">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span>
                            </button>

                        </div>

                        <div class="collapse navbar-collapse">

                            <div id="menu">

                                <ul class="nav navbar-nav">

                                    <li class="dropdown">

                                        <a class="dropdown-link" href="{{ route('Client.home') }}">Trang chủ</a>

                                    </li>

                                    <li class="dropdown">

                                        <a class="dropdown-link" href="{{ route('category.list') }}">Danh mục</a>

                                        <a class="dropdown-caret dropdown-toggle" data-hover="dropdown"><b
                                                class="caret hidden-xs"></b></a>

                                        <ul class="dropdown-menu">
                                            @if(isset($dataDanhMuc) && count($dataDanhMuc) > 0)
                                                @foreach($dataDanhMuc as $category)
                                                    @include('Client.components.menu-childs', ['category' => $category])
                                                @endforeach
                                            @endif
                                        </ul>

                                    </li>

                                </ul>

                                <!-- Search Starts -->

                                <ul class="nav navbar-nav navbar-right hidden-xs">

                                    <li>

                                        <div class="searchlink hidden-xs hidden-sm" id="searchlink">

                                            <i class="fa fa-search"></i>

                                            <div class="searchform">

                                                <form id="search" action="{{ route('home.search') }}" method="get">

                                                    <input type="text" name="keyword" class="s" id="s" placeholder="Nhập từ khóa">

                                                    <button type="submit" class="s-btn">
                                                        <i class="fa fa-search"></i>
                                                    </button>

                                                </form>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                                <!-- Search Ends -->

                            </div>

                        </div>

                        <!--/.nav-collapse -->

                    </div>

                </div>

            </div>

        </div>

    </nav>

    <!-- /. NAVIGATION ENDS

        ========================================================================= -->

</header>

@section('js')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Đăng ký
            $('#signin').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');

                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('password', $('#password').val());

                $.ajax({
                    url: '{{ route("auth.signin") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response.signin) {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 2500
                            });

                            $('#signin').trigger('reset');
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: `${xhr.responseJSON.message}`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });

            // Đăng nhập
            $('#login').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');

                formData.append('email', $('#email').val());
                formData.append('password', $('#password').val());

                $.ajax({
                    url: '{{ route("auth.login") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response.login) {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 2500
                            });

                            $('#login').trigger('reset');

                            setTimeout(() => {
                                window.location.href = "{{ route('Client.home') }}";
                            }, 1500);
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: `${xhr.responseJSON.message}`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });

            // Quên mâật khẩu
            $('#forgotPass').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');

                formData.append('email', $('#emailForgotPass').val());

                $.ajax({
                    url: '{{ route("password.email") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response.sendResetLink) {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 2500
                            });

                            $('#forgotPass').trigger('reset');

                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: `${xhr.responseJSON.message}`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });
        })
    </script>
@endsection
