<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        @if (session('status'))
        <br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Validation Errors -->
        @if (session('errors'))
        <br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" :value="old('email')" required autofocus />
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 text-center">
                        <x-button class="btn btn-info">
                            {{ __('Log in') }}
                        </x-button>
                        <br>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
