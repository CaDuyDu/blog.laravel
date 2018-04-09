<nav class="navbar navbar-custome" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Duy Dự</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ asset('/') }}">Trang chủ</a></li>
                <li><a href="{{asset('admin/login')}}">Đăng nhập</a></li>
                <li><a href="/contact">Liên hệ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form  action="{{ route('blog.search') }}" method="get" class="navbar-form navbar-left" role="search">
                    <div class="search">
                        <input type="text" class="form-control-custom input-sm" maxlength="64" placeholder="Search" name="q" />
                         <button type="submit" class="btn btn-secondary btn btn-default btn-sm">
                             <i class="fa fa-search" aria-hidden="true"></i>
                         </button>
                    </div>
                </form>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>