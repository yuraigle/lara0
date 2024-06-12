<nav class="member w-56 me-4">
    <ul>
        <li{!! request()->routeIs('dashboard') ? ' class="active"' : '' !!}>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li{!! request()->routeIs('member.ads') ? ' class="active"' : '' !!}>
            <a href="{{ route('member.ads') }}">My ADs</a>
        </li>
        <li{!! request()->routeIs('member.services') ? ' class="active"' : '' !!}>
            <a href="{{ route('member.services') }}">My Services</a>
        </li>
        <li{!! request()->routeIs('profile.edit') ? ' class="active"' : '' !!}>
            <a href="{{ route('profile.edit') }}">My Profile</a>
        </li>
        <li{!! request()->routeIs('password.edit') ? ' class="active"' : ''  !!}>
            <a href="{{ route('password.edit') }}" class="flex">My Password</a>
        </li>
        <li class="separator"></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>
