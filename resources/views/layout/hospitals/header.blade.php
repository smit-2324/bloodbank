<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
						<form action="" method="GET" style="display: flex">
						<input type="hidden" name="url" value="{{Route::currentRouteName()}}">
							<input type="text" class="form-control search-control" name="search" id="searchname" placeholder="Search Records..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-search"></i></span>
							<button type="submit" class="btn-primary" style="display:none;">search</button>
						</form>
						</div>
					</div>
					<div>
					<?php
    if(isset($_GET['from'])) {
      $from = $_GET['from'];
	  $to = $_GET['to'];
    }
	else{
		$from =today()->subdays(30);
		$to = now();
	}
    ?>
						<form action="" method="GET" style="display: flex">
						{{-- <input class="form-control" type="date" value="{{$from}}"  name="from" />
						<input class="form-control" type="date" value="{{$to}}" name="to" /> --}}
							<button type="submit" class="btn-primary">search</button>
							</form>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>

							<li class="nav-item dropdown dropdown-large">

								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">

									</a>
									<div class="header-notifications-list">
											</div>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">

								<div class="dropdown-menu dropdown-menu-end">

									<div class="header-message-list">

									</div>

								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<?php
						// $filename = 'storage/images/'.auth()->user()->image_path;
						?>
						{{-- @if(File::exists($filename))
							<img src="{{asset('storage/images/'.auth()->user()->image_path)}}" class="user-img" alt="user avatar">
						@else
						<img src="{{url('/images/create-user-img.png')}}" class="user-img" alt="user avatar">
						@endif --}}
							<div class="user-info ps-3">
								{{-- <p class="user-name mb-0">{{ auth()->user()->name }}</p>
								<p class="designattion mb-0">  {{ auth()->user()->department->first()->name }}</p> --}}
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							{{-- <li><a class="dropdown-item" href="{{url('manage/users/show', auth()->user()->external_id)}}"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="{{route('manage.absence.create')}}"><i class="bx bx-cog"></i><span>Register absence</span></a>
							</li>
							<li><a class="dropdown-item" href="{{url('manage/users/' .auth()->user()->external_id . '/edit')}}"><i class='bx bx-home-circle'></i><span>Settings</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{url('/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li> --}}
						</ul>

					</div>
				</nav>
			</div>
		</header>
