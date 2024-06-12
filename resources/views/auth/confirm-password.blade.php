<x-empty-layout>
    {{-- wtf is that --}}
    <form method="post" class="narrow" action="{{ route('password.confirm') }}">
        @csrf

        <p class="my-2">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <ul>
            <li>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password"
                       required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')"/>
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Confirm') }}</button>
            </li>
        </ul>
    </form>
</x-empty-layout>
