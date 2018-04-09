<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/bootstrap.min.css') }}">
        <link rel="shortcut icon" href="{{asset('admin_assets/favicon.ico')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/customer.css') }}">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/loader.css') }}"> --}}
        {{-- add css --}}
        @yield('head')
    </head>
    <body>
        <div class="wraper-body">
            <!-- HEADER -->
            <header>
                <div class="container-fluild">
                    @if(View::exists('blog.layouts.menu'))
                        @include('blog.layouts.menu')
                    @endif
                </div>
            </header>
            <!-- END HEADER -->
            <section class="content">
                <div class="container">
                    {{-- content --}}
                    @yield('content')
                    {{-- end content --}}
                    {{-- sidebar right --}}
                    @yield('sidebarRight')
                    {{-- end sidebar right --}}
                </div>
            </section>

            <footer id="footer">
                <div class="container">
                    <div class="copyrights">
                        © Copyright 2017 | Designed by 
                        <a href="#" style="color:#f35045;">Duy Dự</a>
                    </div>
                    <div class="social-ul">
                        
                    </div>
                </div>
            </footer>

            <!-- len dau trang -->
            <a href="#0" class="cd-top cd-is-visible cd-fade-out" title="Lên đầu trang"></a>
        </div>
        <script>
              window.fbAsyncInit = function() {
                FB.init({
                  appId            : '390864901348496',
                  autoLogAppEvents : true,
                  xfbml            : true,
                  version          : 'v2.11'
                });
              };
              (function(d, s, id){
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) {return;}
                 js = d.createElement(s); js.id = id;
                 js.src = "https://connect.facebook.net/en_US/sdk.js";
                 fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
        </script>
       {{--  <div class="fb-customerchat" page_id="841929485928565"></div>
            <script>
              window.fbAsyncInit = function() {
                FB.init({
                  appId            : '1706027669642758',
                  autoLogAppEvents : true,
                  xfbml            : true,
                  version          : 'v2.11'
                });
              };
              (function(d, s, id){
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) {return;}
                 js = d.createElement(s); js.id = id;
                 js.src = "https://connect.facebook.net/en_US/sdk.js";
                 fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-customerchat" page_id="841929485928565"></div>
    --}}
    </body>
    
    
    <!-- jquery -->
    <script type="text/javascript" src="{{ asset('blog_assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="{{ asset('blog_assets/js/bootstrap.min.js') }}"></script>
    <!-- css custom -->
    <script type="text/javascript" src="{{ asset('blog_assets/js/customer.js') }}"></script>
  {{--   <script type="text/javascript">
        $(function(){
            
            $("#loader").fadeOut(1000);
            $('.wraper-body').fadeIn( 2000);
        });
    </script> --}}
    {{-- add script --}}
    @yield('script')
</html>