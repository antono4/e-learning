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

    <div class="grid grid-cols-9 h-screen">
        <div class="col-span-3 p-20 flex justify-center items-center" style="background: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%)">
            <div class="text-center">
                <h1 class="text-4xl mt-10 font-semibold tracking-wider whitespace-nowrap text-white">
                    New Here ?
                </h1>
                <h6 class="text-md text-gray-100 mt-5">
                    Sign up and discover a great amount of new opportunities!
                </h6>
                <a href="{{ route('login') }}" class="inline-block bg-white h-[45px] leading-[45px] rounded-3xl px-32 text-[15px] mt-10">
                    Login
                </a>
            </div>
        </div>
        <div class="col-span-6 p-20 text-center">
            <h1 class="text-5xl mt-10 font-semibold tracking-wider whitespace-nowrap">
                Create Free Account
            </h1>
            <h6 class="text-xl text-gray-500 mt-5">
                Sign up using social networks
            </h6>

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

            <form method="POST" action="{{ route('register') }}">
                @csrf

               <div class="grid gap-4 grid-cols-2">
                    <input 
                        placeholder="Name" 
                        class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-3" 
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        required
                    >     
                    <input 
                        placeholder="Email" 
                        class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-3" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required
                    >  
                </div>  
                <div class="grid gap-4 grid-cols-2 mb-5">
                    <input 
                        placeholder="Password" 
                        class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-3" 
                        type="password" 
                        name="password"
                        required
                    >     
                    <input 
                        placeholder="Password Confirmation" 
                        class="placeholder:font-semibold placeholder:text-gray-400 placeholder:tracking-wider border border-gray-300 bg-gray-50 rounded-3xl h-[50px] w-full mb-3" 
                        type="password" 
                        name="password_confirmation"
                        required
                    >  
                </div>  
                <button class="bg-emerald-500 hover:bg-emerald-400 h-[45px] rounded-3xl px-32 text-white text-[15px]">Register</button>
            </form> 
        </div>
    </div>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
