<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
		<meta charset="UTF-8" />
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
			<div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
                <div class="h-full flex flex-auto flex-col justify-between">
                    <main class="h-full">
                        <div class="page-container relative h-full flex flex-auto flex-col">
                            <div class="grid lg:grid-cols-3 h-full">
                                <div class="bg-no-repeat bg-cover py-6 px-16 flex-col justify-between hidden lg:flex" style="background-image: url('frontend/assets/img/others/auth-side-bg.jpg');">
                                    <div class="logo">
                                        <h2 style="color: #fff;">LMGAS</h2>
                                    </div>
                                    <div>
                                        <img class="avatar-img avatar-circle" src="{{asset('frontend/assets/img/others/Login-rafiki.png')}}" loading="lazy">
                                    </div>
                                    <span class="text-white">Copyright © 2023
                                        <span class="font-semibold">Mjnamdi</span>
                                    </span>
                                </div>
                                <div class="col-span-2 flex flex-col justify-center items-center bg-white dark:bg-gray-800">
                                    <div class="xl:min-w-[450px] px-8">
                                        <div class="mb-8">
                                            <h3 class="mb-1">Forgot Password</h3>
                                            <p>Please enter your email address to receive a password reset link</p>

                                            @if(session('success'))
                                            <div class="alert alert-success" style="width: 410px">
                                                <div class="alert-content">
                                                    <span class="alert-icon">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                    <div> {{ session('success') }} </div>
                                                </div>
                                            </div>
                                            @endif
        
                                            
                                            @if(session('error'))
                                            <div class="alert alert-danger" style="width: 410px">
                                                <div class="alert-content">
                                                    <span class="alert-icon">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                    <div> {{ session('error') }} </div>
                                                </div>
                                            </div>
                                            @endif
        
                                            @if($errors->any())
                                                @foreach ($errors->all() as $error)
                                                <div class="alert alert-info" style="width: 410px">
                                                    <div class="alert-content">
                                                        <span class="alert-icon">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </span>
                                                        <div> {{ $error }} </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif


                                        </div>
                                        <div>
                                            <form action="{{route('forgot_password_submit')}}" method="POST">
                                                @csrf
                                                <div class="form-container vertical">
                                                    <div class="form-item vertical">
                                                        <input class="input" type="text" name="email" placeholder="Email">
                                                    </div>
                                                    <button class="btn btn-solid w-full" type="submit">Send Email</button>
                                                    <div class="mt-4 text-center">
                                                        <span>Back to </span>
                                                        <a class="text-primary-600 hover:underline" href="{{route('login')}}">Login</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>                              
			</div>
		</div>
        
	</body>
</html>