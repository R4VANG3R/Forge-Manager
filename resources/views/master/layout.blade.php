<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forge Manager - @yield('title')</title>

    @section('meta')
    {{-- META --}}
    <meta charset="utf-8">
    @show

    @section('css')
    {{-- CSS --}}
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    @show

    @section('scripts')
    {{-- JS --}}
    @show
</head>
<body>
    {{--Topbar--}}
    @include('master.topbar')

    <div class="container-fluid">
        <div class="row">
            {{--Menu here--}}
            @include('master.menu')

            <section class="main-content col-md-offset-2 col-md-10 col-sm-offset-3 col-sm-9">
                @section('body')

                @show
            </section>
        </div>
    </div>

    @section('js')
        {{--JS--}}
    @show
</body>
</html>
