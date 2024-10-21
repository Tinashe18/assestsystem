<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
            <div class="row">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="row">
                <div class="col-2">
                <x-label for="email" :value="__('Email')" />
            </div>
                <div class="col-2">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </div>
            

            <!-- Password -->
            <div class="row">
                <div class="col-2">
                <x-label for="password" :value="__('Password')" />
                </div>
                <div class="col-2">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                              required autocomplete="current-password" />
                </div>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="row">
            <div class="col-2">
                <label for="remember_me"></label>
            </div>
                <div class="col-3">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                
                    {{ __('Remember me') }}

            </div>
            </div>
            
            
            <div class="row">
            
                @if (Route::has('password.request'))
                
                    <a class="underline text-sm col-sm-2" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                
                @endif
            
                <div class="col">
                <x-button class="btn btn-info">
                    {{ __('Log in') }}
                </x-button>
                </div>
            </div>
            
        </form>
        
            
        
    </x-auth-card>
    
</x-guest-layout>
