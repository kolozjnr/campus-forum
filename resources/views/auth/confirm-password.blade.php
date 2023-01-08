<x-guest-layout>
    <section class="section coming-soon" data-section="section3">
        <div class="container">
          <div class="row">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="col-md-6">
                <div class="right-content">
                  <div class="top-content">
                    <h6> {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</h6>
                  </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</section>
</x-guest-layout>
