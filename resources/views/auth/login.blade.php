<x-empty-layout>
    <form method="post" class="narrow" action="{{ route('login') }}">
        @csrf

        <ul>
            <li>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" autocomplete="username"
                       value="{{ old('email') }}" required autofocus/>
                <x-input-error :messages="$errors->get('email')"/>
            </li>

            <li>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" autocomplete="current-password"
                       value="{{ old('password') }}" required/>
                <x-input-error :messages="$errors->get('password')"/>
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Log in') }}</button>
            </li>

            <li>
                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                <br/>
                <a href="{{ route('register') }}">{{ __('New user? Register.') }}</a>
            </li>
        </ul>
    </form>
</x-empty-layout>
