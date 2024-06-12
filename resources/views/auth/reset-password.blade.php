<x-empty-layout>
    <form method="post" class="narrow" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <ul>
            <li>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" autocomplete="username"
                       value="{{ old('email', $request->email) }}" required autofocus/>
                <x-input-error :messages="$errors->get('email')"/>
            </li>

            <li>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" autocomplete="new-password"
                       required/>
                <x-input-error :messages="$errors->get('password')"/>
            </li>

            <li>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password"
                       name="password_confirmation" required/>
                <x-input-error :messages="$errors->get('password_confirmation')"/>
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Reset Password') }}</button>
            </li>
        </ul>
    </form>
</x-empty-layout>
