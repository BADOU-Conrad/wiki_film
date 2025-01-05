<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    
<div class="vh-100" style="background: url('assets/images/pages/01.html'); background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px">
  <div class="container">
    <div class="row justify-content-center align-items-center height-self-center vh-100">
        <div class="col-lg-8 col-md-12 align-self-center">
            <div class="user-login-card bg-body">
               <h4 class="text-center mb-5">Create Your Account</h4>
               <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                  <div class="col">
                      <label class="text-white fw-500 mb-2">First Name</label>
                      <input type="text" class="form-control rounded-0" required="">
                  </div>
                  <div class="col">
                      <label class="text-white fw-500 mb-2">Last Name</label>
                      <input type="text" class="form-control rounded-0" required="">
                  </div>
                  <div class="col">
                      <label class="text-white fw-500 mb-2">Username *</label>
                      <input type="text" class="form-control rounded-0" required="">
                  </div>
                  <div class="col">
                      <label class="text-white fw-500 mb-2">Email *</label>
                      <input type="email" class="form-control rounded-0" required="">
                  </div>
                  <div class="col">
                      <label class="text-white fw-500 mb-2">Password *</label>
                      <input type="password" class="form-control rounded-0" required="">
                  </div>
                  <div class="col">
                      <label class="text-white fw-500 mb-2">Confirm Password *</label>
                      <input type="password" class="form-control rounded-0" required="">
                  </div>
              </div>
              <label class="list-group-item d-flex align-items-center mt-5 mb-3 text-white"><input class="form-check-input m-0 me-2" type="checkbox">I've read and accept the <a href="terms-of-use.html" class="ms-1">terms & conditions*</a></label>
              <div class="row text-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                  <div class="full-button">
                    <div class="iq-button">
                        <a href="#" class="btn text-uppercase position-relative">
                            <span class="button-text">Sign Up</span>
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                    <p class="mt-2 mb-0 fw-normal">Already have an account?<a href="login.html" class="ms-1">Login</a></p>
                  </div>
                </div>
                <div class="col-lg-3"></div>
              </div>
              
            </div>
        </div>
    </div>
  </div>
</div>
</x-guest-layout>
