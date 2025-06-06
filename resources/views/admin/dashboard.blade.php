<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('backend/assets/img/favicon.ico')}}">
    <title>LMGAS | Laravel 11 Multi-Guard Auth System</title>

    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
					<div class="side-nav side-nav-transparent side-nav-expand">
						<div class="side-nav-header">
							<div class="logo px-6">
								<h3 style="margin: 10px 0; color: #222;">LMGAS</h3>
							</div>
						</div>
						<div class="side-nav-content relative side-nav-scroll">
							<nav class="menu menu-transparent px-4 pb-4">
								
								<div class="menu-group">
									<div class="menu-title">Authentication</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
												</svg>
												<span class="menu-item-text">Sign In</span>
											</div>
											
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
												</svg>
												<span class="menu-item-text">Sign Up</span>
											</div>
											
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
												</svg>
												<span class="menu-item-text">Forgot Password</span>
											</div>
											
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
												</svg>
												<span class="menu-item-text">Reset Password</span>
											</div>
											
										</li>
									</ul>
								</div>
								
							</nav>	
						</div>
					</div>
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
									<div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
										<div class="text-2xl">
											<svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
											<svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
											</svg>
										</div>
									</div>
									<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
										<div class="text-2xl">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
										</div>
									</div>
								
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">
									
									<!-- Notification-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="nav-notification-dropdown" data-bs-toggle="dropdown">
											<div class="text-2xl header-action-item header-action-item-hoverable">
												<span class="badge-wrapper">
													<span class="badge-dot badge-inner" style="top: 3px; right: 6px;"></span>
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
													</svg>
												</span>
											</div>
										</div>
									
									</div>
									<!-- Config-->
									<div class="text-2xl header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#nav-config">
										<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
									</div>
									<!-- User Dropdown-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item flex items-center gap-2">
												<span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
												<img class="avatar-img avatar-circle" src="{{asset('backend/assets/img/avatars/thumb-1.jpg')}}" loading="lazy" alt=""></span>
												<div class="hidden md:block">
													<div class="text-xs capitalize">admin</div>
													<div class="font-bold"> {{ Auth::guard('admin')->user()->email }} </div>
												</div>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end min-w-[240px]">
											<li class="menu-item-header">
												<div class="py-2 px-3 flex items-center gap-2">
													<span class="avatar avatar-circle avatar-md">
														<img class="avatar-img avatar-circle" src="{{asset('backend/assets/img/avatars/thumb-1.jpg')}}" loading="lazy" alt="">
													</span>
													<div>
														<div class="font-bold text-gray-900 dark:text-gray-100">{{ Auth::guard('admin')->user()->username }}</div>
														<div class="text-xs">{{ Auth::guard('admin')->user()->email }}</div>
													</div>
												</div>
											</li>
											<li class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="#">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
														</svg>
													</span>
													<span>Profile</span>
												</a>
											</li>
											
											<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
                                                <a class="flex gap-2 items-center" href="{{route('admin_logout')}}">
                                                    <span class="text-xl opacity-50">
                                                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                        </svg>
                                                    </span>
                                                    <span>Logout</span>
                                                </a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>
						<!-- Popup start -->
						
						<!-- Popup end -->
						<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto h-full">
                                        <div id="welcome-page-0" class="welcome-page-section h-full flex flex-col items-center justify-center">
                                            <div class="text-center">
                                                <span class="avatar avatar-circle avatat-lg border-2 border-white dark:border-gray-800 shadow-lg" data-avatar-size="60" style="width: 150px; height: 150px;">
                                                    <img class="avatar-img avatar-circle" src="{{asset('backend/assets/img/avatars/thumb-1.jpg')}}" loading="lazy">
                                                </span>
                                                <h3 class="mb-2">{{ Auth::guard('admin')->user()->username }}</h3>
                                                <p class="text-base">{{ Auth::guard('admin')->user()->email }}</p>
                                               
                                            </div>
                                        </div>

                                    </div>    
                                </div>
							</main>
							<!-- Content end -->
							<!-- Footer start -->
							<footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
								<div class="flex items-center justify-between flex-auto w-full">
									<span>Copyright © 2023 <span class="font-semibold">Mjnamadi</span> All rights reserved.</span>
									<div>
										<a class="text-gray" href="#">Term &amp; Conditions</a>
										<span class="mx-2 text-muted"> | </span>
										<a class="text-gray" href="#">Privacy &amp; Policy</a>
									</div>
								</div>
							</footer>
							<!-- Footer end -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Core Vendors JS -->
		<script src="{{asset('backend/assets/js/vendors.min.js')}}"></script>

		<!-- Other Vendors JS -->

		<!-- Page js -->
        <script src="{{asset('backend/assets/js/pages/welcome.js')}}"></script>

		<!-- Core JS -->
		<script src="{{asset('backend/assets/js/app.min.js')}}"></script>
	</body>

</html>