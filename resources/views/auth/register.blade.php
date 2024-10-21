<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Name -->
            <div class="row">
                <div class="col-2">
                <x-label for="name" :value="__('Name')" />
                </div>
                    <div class="col-2">
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
                </div>
                
    
            <!-- Email Address -->
            <div class="row">
            <div class="col-2">
                <x-label for="email" :value="__('Email')" />
            </div>
            <div class="col-2">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                                required autocomplete="new-password" />
            
                </div>
            </div>
            

            <!-- Confirm Password -->
            <div class="row ">
            <div class="col-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
            </div>
            <div class="col-2">
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            </div>
            <div class="row-2">
            
                <a class="underline text-sm " href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
        

                <x-button class="btn btn-info col">
                    {{ __('Register') }}
                </x-button>
            </div>
            </div>
        </form>

    </x-auth-card>

</x-guest-layout>
