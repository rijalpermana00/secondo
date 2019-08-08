<div id="navbar" class="navbar navbar-default ace-save-state" style="background:#3c8dbc">
	<div class="navbar-container ace-save-state" id="navbar-container">
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
						<a class="nav-link" href="{{ route('login') }}" style="color:white; background-color:#3c8dbc;"><b>{{ __('Login') }}</b></a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}" style="color:white; background-color:#3c8dbc;"><b>{{ __('Register') }}</b></a>
						</li>
					@endif
					@else
					<li class="light-blue dropdown-modal">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="background-color:#3c8dbc;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><b>
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
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="_token" content="{{csrf_token()}}" />