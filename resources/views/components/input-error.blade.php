@props(['messages'])

@if ($messages)
    <ul>
        @foreach ((array) $messages as $message)
            <li><span class="danger">{{ $message }}</span></li>
        @endforeach
    </ul>
@endif
