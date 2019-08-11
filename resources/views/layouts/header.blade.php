<div id="navbar" class="navbar navbar-default ace-save-state customback">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar" style="color:white; background-color:rgba(45, 52, 54,1.0);">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>
		<div class="navbar-header pull-left">
			<a href="/" class="navbar-brand" style="color:#white">
				<small>
					<i class="fa fa-leaf"></i>
					Example App
				</small>
			</a>
		</div>
		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				@guest
					<li class="nav-item">
						<a class="nav-link customback" href="{{ route('login') }}" style="color:white; background-color:rgba(45, 52, 54,0.0);"><b>{{ __('Login') }}</b></a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}" style="color:white; background-color:rgba(45, 52, 54,0.0);"><b>{{ __('Register') }}</b></a>
						</li>
					@endif
					@else
					<li class="light-blue dropdown-modal">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="background-color:rgba(45, 52, 54,0.0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><b>
							{{ Auth::user()->name }} </b><span class="caret"></span>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="/logout" onclick="event.preventDefault();
                                 	document.getElementById('logout-form').submit();" class="dropdown-item">
                                 	<i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
								<div></div>
							</li>
						</ul>
					</li>
				@endguest
			</ul><!-- /.ace-nav -->
		</div>
	</div><!-- /.navbar-container -->
</div>
<meta name="_token" content="{{csrf_token()}}" />