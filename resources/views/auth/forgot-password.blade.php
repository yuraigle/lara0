<x-empty-layout>
    <form method="post" class="narrow" action="{{ route('password.email') }}">
        @csrf

        <ul>
            <li>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" autocomplete="username"
                       value="{{ old('email') }}" required autofocus/>
                <x-input-error :messages="$errors->get('email')"/>
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Email Password Reset Link') }}</button>
            </li>

            <li>
                <a href="{{ route('login') }}">{{ __('Already registered? Log in.') }}</a>
            </li>
        </ul>
    </form>
</x-empty-layout>
