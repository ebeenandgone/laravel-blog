@include('layouts.head')
@include('layouts.nav')

<div class="container">
    <div class="row">
        @yield('content')

        @include('layouts.sidebar')
    </div>  
</div>

@include('layouts.footer')