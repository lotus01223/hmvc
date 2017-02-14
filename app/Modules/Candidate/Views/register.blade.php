<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"-->
<meta http-equiv="x-ua-compatible" content="IE=edge">
<title>Entry form / Entry form</title>
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="description"  content="jumpIT・engineer" />
<meta name="keywords" content="jumpIT,it,engineer,recruit,Career change">
<meta property="og:title" content="jumpIT">
<meta property="og:url" content="http://">
<meta property="og:image" content="">
<meta property="og:site_name" content="jumpIT">
<meta property="og:description" content="engineer Career change">

<!-- not edit -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<!-- not edit -->

<!-- edit -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/font/linea_complete/style.css') }}">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<!-- edit -->

</head>
<body>

<header class="h-header type2 cf" role="banner">
    <div class="inner cf">
        <p class="logo">
            <a href="./">
                <img src="/assets/img/common/logo-type_2.svg" alt="jumpIT">
            </a>
        </p>
        <nav class="login_nav cf">
            <ul class="list cf">
                <li>
                    <button class="btn btn-sm btn-round btn-primary">
                        <span>sign in</span>
                    </button>
                </li>
                <li>
                    <button class="btn btn-sm btn-round btn-warning">
                        <span>Entry Now</span>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</header><!-- /header -->

<div class="breadcrumb_block cf">
    <ol class="breadcrumb cf">
        <li class="breadcrumb-item"><a href="#">TOP</a></li>
        <li class="breadcrumb-item active">Entry form</li>
    </ol>
</div>


<main class="m-main m-second cf" role="main">

    <div class="title_block type1 cf">
        <h1 class="ttl">
            <span>ENTRY</span>
        </h1>
    </div>

    <div class="column_wrap_1 cf">
        <div class="inner cf">
            <div class="form_wrap cf">
                <div class="form_top_text text-center type1 cf">
                    <p class="text">Eメールとパスワードを入力してください<br>エントリー案内を記載したメールをお送りします</p>
                </div>

    @if (Session::has('alert-danger'))
        <div class="alert alert-danger">{{ Session::get('alert-danger') }}</div>
    @endif

    @if (Session::has('alert-error'))
        <div class="alert alert-error">{{ Session::get('alert-error') }}</div>
    @endif

    @if (Session::has('alert-success'))
        <div class="alert alert-success">{{ Session::get('alert-success') }}</div>
    @endif
    
                <form action="" method="POST" accept-charset="utf-8" class="mt3_0">
                    {{ csrf_field() }}
                    <div class="form_inner cf">
                        <div class="f-form form-group">
                            <div class="form_head">
                                <label class="form-control-label" for="for1">Email</label>
                            </div>
                            <div class="form_contents">
                                <input type="emai" class="form-control" name="email" value="" placeholder="Please enter your email address." required>
                            </div>
                        </div>
                        <div class="f-form form-group">
                            <div class="form_head">
                                <label class="form-control-label" for="for2">Password</label>
                            </div>
                            <div class="form_contents">
                                <input type="password" class="form-control" name="password" value="" placeholder="Please enter password." required>
                            </div>
                        </div>          
                    </div><!-- /form_inner -->
                    <div class="btn-center col-md-12 mt4_0 cf">
                        <div class="btn_item col-md-6 cf">
                            <button class="btn btn-block btn-md btn-primary btn-outline">
                                <span>Send</span><i class="icon-arrows-right"></i>
                            </button>
                        </div>
                    </div>
                </form>

                    <div class="entry_or-lines mt4_0"><p>or</p></div>

                    <div class="btn-center col-md-12 mt4_0 cf">
                        <div class="btn_item col-md-6 cf">
                            <button class="btn btn-block btn-md btn-primary btn-outline">
                                <span><span class="f_sns_button"><img src="/assets/img/icon/icon-sns_btn_facebook.svg" alt="facebook"></span>Facebook</span>
                            </button>
                        </div>
                    </div>
                    <div class="btn-center col-md-12 mt1_4 cf">
                        <div class="btn_item col-md-6 cf">
                            <button class="btn btn-block btn-md btn-danger btn-outline">
                                <span><span class="f_sns_button"><img src="/assets/img/icon/icon-sns_btn_googleplus.svg" alt="facebook"></span>Google</span>
                            </button>
                        </div>
                    </div>


                <div class="form_top_text text-center type1 mt4_0 cf">
                    <p class="text">本サービスに新規登録することで、<a href="" class="f-link_txt">利用規約</a>と<a href="" class="f-link_txt">プライバシーポリシー</a>に同意するものとします</p>
                </div>

            </div><!-- /form_wrap -->
        </div><!-- /inner -->
    </div><!-- /column_wrap_1 -->


</main><!-- /m-main -->


<footer class="f-footer cf" role="contentinfo">
    <div class="inner cf">
        <div class="scroll_btn">
            <a href="#" class="scroll" data-scroll><i class="icon-arrows-up"></i></a>
        </div>
        <div class="f-logo_top cf">
            <p class="logo">
                <a href="#">
                    <img src="/assets/img/common/logo-type_2.svg" alt="jumpIT">
                </a>
            </p>
            <p  class="text">
                Career change platform for all IT engineer of the world.
            </p>
        </div>
        <div class="f-menu_block cf">
            <div class="menu_item cf">
                <ul class="list cf">
                    <li>
                        <a href="#">
                            <span>News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Terms of service</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_item cf">
                <ul class="list cf">
                    <li>
                        <a href="#">
                            <span>Q&A</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Privacy policy</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="sns_block cf">
            <li>
                <a href="#">
                    <i class="icon_sns facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon_sns twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon_sns google"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="copy_block">
        <p class="copy">Copyright © Neo Career Co., LTD. ALL Right Reserved.</p>
    </div>
</footer>


<!-- all -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script src="/assets/js/scroll/smooth-scroll.min.js"></script>
<!-- // END -->

<script src="/assets/js/scroll/smooth-scroll.min.js"></script>
<script src="/assets/js/scrollbar/perfect-scrollbar.jquery.min.js"></script>
<script src="/assets/js/common.js"></script>


</body>
</html>