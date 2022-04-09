<x-guest-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script src="https://kit.fontawesome.com/d02202f823.js" crossorigin="anonymous"></script>

    <div class="grid grid-cols-7 h-screen">
        <div class="col-span-4 py-20 px-28 text-center">
            <h1 class="text-5xl mt-10 font-semibold tracking-wider whitespace-nowrap">Login to Your Account</h1>
            <h6 class="text-xl text-gray-500 mt-5">Login using social Networks</h6>

            <div class="social-networks flex justify-center mt-3">
                <div class="bg-[#395693] mx-2 w-[35px] h-[35px] rounded-full text-center leading-[35px] text-white">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="bg-[#d54c3f] mx-2 w-[35px] h-[35px] rounded-full text-center leading-[35px] text-white">
                    <i class="fab fa-google-plus-g"></i>
                </div>
                <div class="bg-[#1b71b6] mx-2 w-[35px] h-[35px] rounded-full text-center leading-[35px] text-white">
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

            <div class="flex items-center justify-center my-5">
                <hr class="border w-full border-gray-200">
                <small class="mx-2">OR</small>
                <hr class="border w-full border-gray-200">
            </div>   

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input 
                    placeholder="Email" 
                    class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-3" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required
                >    
                <input 
                    placeholder="Password" 
                    class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-5" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password
                ">    
                <button class="bg-emerald-500 hover:bg-emerald-400 h-[45px] rounded-3xl px-32 text-white text-[15px]">Login</button>
            </form> 
        </div>
        <div class="col-span-3 p-20 flex justify-center items-center" style="background: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%)">
            <div class="text-center">
                <h1 class="text-4xl mt-10 font-semibold tracking-wider whitespace-nowrap text-white">
                    New Here ?
                </h1>
                <h6 class="text-xl text-gray-100 mt-5">
                    Sign up and discover a great amount of new opportunities!
                </h6>
                <a href="{{ route('register') }}" class="inline-block bg-white h-[45px] leading-[45px] rounded-3xl px-32 text-[15px] mt-10">
                    Register
                </a>
            </div>
        </div>
    </div>

    
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
