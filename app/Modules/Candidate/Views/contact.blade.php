<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/assets/images/favicon_1.ico">

        <title>JUMPIT</title>

        <style type="text/css">
            form > .input-form {
                padding-bottom: 5px;
            }
        </style>
    </head>
    <body>

    @if (Session::has('alert-danger'))
        <div class="alert alert-danger">{{ Session::get('alert-danger') }}</div>
    @endif

    @if (Session::has('alert-error'))
        <div class="alert alert-error">{{ Session::get('alert-error') }}</div>
    @endif

    @if (Session::has('alert-success'))
        <div class="alert alert-success">{{ Session::get('alert-success') }}</div>
    @endif

        <div id="contact-us-page" class="wrapper-page card-box" style="width: 400px;">

            <div class="text-center">
                <a href="/" class="logo logo-lg"><i class="md md-equalizer"></i> <span>Contact Us</span> </a>
            </div>

            <form class="form-horizontal m-t-20" action="/contact-us" method="POST">
                {{ csrf_field() }}
                <div class="input-form">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required autofocus>
                </div>
                <div class="input-form">
                    <input type="email" name="mail_from" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <textarea name="content" placeholder="Content" required autofocus></textarea>

                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">OK
                        </button>
                    </div>
                </div>
            </form>
            
        </div>

    </body>
</html>