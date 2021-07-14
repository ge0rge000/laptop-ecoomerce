{{--  <x-guest-layout>
    <x-jet-authentication-card>
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
    </x-jet-authentication-card>
</x-guest-layout>  --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    .login-g {
        margin: 219px 175px;
    }
     select {
        width: 81px;

    }
    .de{
        width: 81px;
    }
    input.btn.btn-submit {
    background-color: #039ee3;
}

</style>

<x-guest-layout>
<div class="login-g">
<div class=" main-content-area">
    <div class="wrap-login-item ">
        <div class="register-form form-item ">

<x-jet-validation-errors class="mb-4" />
            <form class="form-stl" action="{{ route('register') }}" name="frm-login" method="post" >
                @csrf
                <fieldset class="wrap-title">
                    <h3 class="form-title">Create an account</h3>
                    <h4 class="form-subtitle">Personal infomation</h4>
                </fieldset>
                <fieldset class="wrap-input">
                    <label for="frm-reg-lname">Name*</label>
                    <input type="text" id="frm-reg-lname" name="name" placeholder="your name*" :value="name" required autofocus autocomplete="name">
                </fieldset>
                <fieldset class="wrap-input">
                    <label for="frm-reg-email">Email Address*</label>
                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address" :value="email">
                </fieldset>
                <fieldset class="wrap-input">
                    <label >phonenumber*</label>
                    <input type="text" id="frm-reg-lname" name="phone" placeholder="phone*" :value="phone" required autofocus autocomplete="name">
                </fieldset>
                <fieldset class="wrap-input">
                    <label for="frm-reg-lname">town*</label>
                    <input type="text" id="frm-reg-lname" name="town" placeholder="your town*" :value="town" required autofocus autocomplete="name">
                </fieldset>
                <fieldset class="wrap-input">
                    <label for="frm-reg-lname">address*</label>
                    <input type="text" id="frm-reg-lname" name="address" placeholder="your address*" :value="address" required autofocus autocomplete="name">
                </fieldset>
                <fieldset class="wrap-input item-width-in-half left-item ">
                    <label for="frm-reg-pass">Password *</label>
                    <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
                </fieldset>
                <fieldset class="wrap-input item-width-in-half ">
                    <label for="frm-reg-cfpass">Confirm Password *</label>
                    <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                </fieldset>
                <input type="submit" class="btn btn-submit" value="Register" name="submit">
            </form>
        </div>
    </div>
</div>
</div>




</x-guest-layout>
