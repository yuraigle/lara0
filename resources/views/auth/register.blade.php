<x-empty-layout>
    <form method="post" class="narrow" action="{{ route('register') }}">
        @csrf

        <ul>
            <li>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" autocomplete="name"
                       value="{{ old('name') }}" required autofocus/>
                <x-input-error :messages="$errors->get('name')"/>
            </li>

            <li>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" autocomplete="username"
                       value="{{ old('email') }}" required/>
                <x-input-error :messages="$errors->get('email')"/>
            </li>

            <li>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" autocomplete="new-password"
                       value="{{ old('password') }}" required/>
                <x-input-error :messages="$errors->get('password')"/>
            </li>

            <li>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password"
                       name="password_confirmation" required/>
                <x-input-error :messages="$errors->get('password_confirmation')"/>
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Register') }}</button>
            </li>

            <li>
                <a href="{{ route('login') }}">{{ __('Already registered? Log in.') }}</a>
            </li>
        </ul>
    </form>
</x-empty-layout>
