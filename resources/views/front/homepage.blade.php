<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">	
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.ico')}}">
		<title>LMGAS | Laravel 11 Multi-Guard Auth System</title>

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
	</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
									<div class="flex flex-col gap-4">
                                        <h4><a href="home.html">LMGAS</a></h4>
                                    </div>
                                    
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">
									
									<div class="dropdown">
										<div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item flex items-center gap-8">
												<div class="hidden md:block">
													<a href="{{route('user_register')}}" class="font-bold">Register</a>
												</div>
                                                <div class="hidden md:block">
													<a href="{{route('login')}}" class="font-bold">Login</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>
						<!-- Popup start -->
						<div class="modal fade" id="nav-config" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog drawer drawer-end">
								<div class="drawer-content">
									<div class="drawer-header">
										<h4>Theme Config</h4>
										<span class="close-btn close-btn-default" role="button" data-bs-dismiss="modal">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
											</svg>
										</span>
									</div>
									
								</div>
							</div>
						</div>
			
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto h-full">
                                        <div id="welcome-page-0" class="welcome-page-section h-full flex flex-col items-center justify-center">
                                            <div class="text-center">
                                                <img src="{{asset('frontend/assets/img/others/Laravel.png')}}" alt="Laravel Logo" class="mx-auto mb-8" style="width: 200px;">
                                                <h3 class="mb-2">Laravel 11 Multi-Guard Authentication System From Scratch.</h3>
                                                <p class="text-base">Build Multi-Auth Using Multi-Guard and Multi-Tables Aboslutely from scratch with any Laravel package.</p>
                                               
                                            </div>
                                        </div>

                                    </div>    
                                </div>
							</main>
							<!-- Content end -->
							<!-- Footer start -->
							<footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
								<div class="flex items-center justify-center flex-auto w-full">
									<span>Copyright © 2023 <span class="font-semibold">Mjnamdi</span> All rights reserved.</span>
								</div>
							</footer>
							<!-- Footer end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>