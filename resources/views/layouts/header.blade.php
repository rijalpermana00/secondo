<div id="navbar" class="navbar navbar-default ace-save-state" style="background:#2e6da4">
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
						<a class="nav-link" href="{{ route('login') }}" style="color:white; background-color:#2e6da4;"><b>{{ __('Login') }}</b></a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}" style="color:white; background-color:#2e6da4;"><b>{{ __('Register') }}</b></a>
						</li>
					@endif
					@else
					<li class="light-blue dropdown-modal">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="background-color:#2e6da4;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><b>
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
								<a href="http://secondo.localhost:90/logout" onclick="event.preventDefault();
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

