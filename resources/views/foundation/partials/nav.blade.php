<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ trans('foundation.title') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('foundation.home') }}">
                        <i class="glyphicon glyphicon-dashboard"></i>&nbsp;{{ trans('foundation.nav.home') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sellers
                    </a>
                </li>
                <li>
                    <a href="#">
                        Customers
                    </a>
                </li>




                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-briefcase"></i>&nbsp;Products <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('products.list') }}">
                                <i class="glyphicon glyphicon-menu-right"></i>&nbsp;Manager
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('features.index') }}">
                                <i class="glyphicon glyphicon-menu-right"></i>&nbsp;Features
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class="glyphicon glyphicon-menu-right"></i>&nbsp;{{ trans('foundation.nav.categories') }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
