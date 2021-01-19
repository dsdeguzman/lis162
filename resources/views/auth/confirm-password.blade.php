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
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
