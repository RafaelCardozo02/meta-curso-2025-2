<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
		<meta charset="UTF-8" />
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
			<div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
				<main class="h-full">
                    <div class="page-container relative h-full flex flex-auto flex-col">
                        <div class="h-full">
                            <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                                <div class="card min-w-[320px] md:min-w-[450px] card-shadow" role="presentation">
                                    <div class="card-body md:p-10">
                                        <div class="text-center">
                                            <div class="logo">
                                                <img class="mx-auto" src="{{asset('backend/assets/img/logo/logo-light-streamline.png')}}" alt="Elstar logo">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <h3 class="mb-1">Set new password</h3>
                                                <p>Your new password must be different to previous password</p>

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
                        <form action="{{route('reset_password_submit', [$token, $email])}}" method="POST">
                            @csrf
                            <div class="form-container vertical">
                                <div class="form-item vertical">
                                    <label class="form-label mb-2">New Password</label>
                                    <div>
                                        <span class="input-wrapper">
                                            <input class="input pr-8" type="password" name="password" placeholder="New Password">
                                            <div class="input-suffix-end">
                                                <span class="cursor-pointer text-xl">
                                                    <svg
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-width="2"
                                                        viewBox="0 0 24 24"
                                                        aria-hidden="true"
                                                        height="1em"
                                                        width="1em"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item vertical">
                                    <label class="form-label mb-2">Confirm New Password</label>
                                    <div>
                                        <span class="input-wrapper">
                                            <input class="input pr-8" type="password" name="confirm_password" placeholder="Confirm New Password">
                                            <div class="input-suffix-end">
                                                <span class="cursor-pointer text-xl">
                                                    <svg
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-width="2"
                                                        viewBox="0 0 24 24"
                                                        aria-hidden="true"
                                                        height="1em"
                                                        width="1em"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <button class="btn btn-solid w-full" type="submit">Submit</button>
                                <div class="mt-4 text-center">
                                    <span>Back to</span>
                                    <a class="text-primary-600 hover:underline" href="{{route('admin_login')}}">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>                
			</div>
		</div>
	</body>

</html>