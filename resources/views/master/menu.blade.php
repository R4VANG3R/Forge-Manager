{{-- Side menu --}}
<nav class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="{{ Route::current()->uri() == "/" ? 'active' : '' }}"><a href="/"><i class="fa fa-tachometer"></i> Dashboard</a></li>
        <li class="{{ Route::current()->uri() == "console" ? 'active' : '' }}"><a href="/console"><i class="fa fa-terminal"></i> Console</a></li>
        <li class="{{ Route::current()->uri() == "players" ? 'active' : '' }}"><a href="/players"><i class="fa fa-users"></i> Players</a></li>
        <li class="{{ Route::current()->uri() == "mods" ? 'active' : '' }}"><a href="/mods"><i class="fa fa-database"></i> Mods</a></li>
        <li class="{{ Route::current()->uri() == "schedule" ? 'active' : '' }}"><a href="/schedule"><i class="fa fa-calendar"></i> Schedule</a></li>
        <li class="{{ Route::current()->uri() == "backups" ? 'active' : '' }}"><a href="/backups"><i class="fa fa-hdd-o"></i> Backups</a></li>
        {{--<li><a href="/admins"><i class="fa fa-shield"></i> Admins</a></li>--}}
    </ul>
</nav>
{{-- End side menu --}}