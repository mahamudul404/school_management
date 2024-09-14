
<li class="nav-item">
    <a href=" {{ route($url) }} " class="nav-link  {{ request()->routeIs($url) ? 'active fw-bold' : null }} ">{{ $name  }}</a>
</li>