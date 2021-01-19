<x-guest-layout>
    <x-auth-card>
      <x-slot name="logo">
            <a href="/"><div><img src='/svg/logo.svg' alt='logo' style="width:100px;height:70px;margin-left:auto;margin-right:auto;"></div></a>
            <div style="text-align:center;">
              <h1>Millenium University</h1>
            </div>
            <div>
              <h1>Faculty Portal for Guardian's Contact Information</h1>
            </div>
      </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
