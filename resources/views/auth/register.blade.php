<x-guest-layout>
    <div class="container">

        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-3">
                        <!-- Name -->
                        <div class="form-group">
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                <!-- Email Address -->
                        <div class="form-group">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                <!-- Password -->
                        <div class="form-group">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                <!-- Confirm Password -->
                        <div class="form-group">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="form-control"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-3">
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="btn btn-info">
                                {{ __('Register') }}
                            </x-button><br>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </x-auth-card>
    </div>

</x-guest-layout>
