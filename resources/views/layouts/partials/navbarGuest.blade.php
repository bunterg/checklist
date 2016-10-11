<div id="navbar" class="navbar navbar-default navbar-fixed-top">
<div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
        <a href="{{ url('/') }}" class="navbar-brand">
            <small>
                <!--i class="fa fa-leaf"></i-->
                CheckList
            </small>
        </a>
    </div>
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
            <li>
                <a href="{{ url('/login') }}">Iniciar Sesión</a>
            </li>
            <li>
                <a href="{{ url('/register') }}">Registrar</a>
            </li>
        </ul>
    </div>
</div><!-- /.navbar-container -->
</div>