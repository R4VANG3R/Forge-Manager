@extends('master.layout')

@section('title', 'Console')

@section('meta')
    @parent
    {{--append here--}}
@endsection

@section('css')
    @parent
    {{--append here--}}
    <link href="/css/console.css" type="text/css" rel="stylesheet">
@endsection

@section('scripts')
    @parent
    {{--append here--}}
@endsection

@section('body')
    @parent
    {{--append here--}}
    <div class="row">
        <section id="console" class="col-xs-12">
            <div id="console-output">
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] There are 1/10 players online:</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] R4VANG3R</span>
                <span class="console-line">23:30:07 Server: Saving world data. Expect lag for a short while.</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saving...</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saved the world</span>
                <span class="console-line">23:30:07 Server: Save Complete</span>
                <span class="console-line text-info">23:37:32 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:42:27 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] There are 1/10 players online:</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] R4VANG3R</span>
                <span class="console-line">23:30:07 Server: Saving world data. Expect lag for a short while.</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saving...</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saved the world</span>
                <span class="console-line">23:30:07 Server: Save Complete</span>
                <span class="console-line text-info">23:37:32 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:42:27 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] There are 1/10 players online:</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] R4VANG3R</span>
                <span class="console-line">23:30:07 Server: Saving world data. Expect lag for a short while.</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saving...</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saved the world</span>
                <span class="console-line">23:30:07 Server: Save Complete</span>
                <span class="console-line text-info">23:37:32 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:42:27 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] There are 1/10 players online:</span>
                <span class="console-line text-info">23:27:07 CONSOLE: [INFO] R4VANG3R</span>
                <span class="console-line">23:30:07 Server: Saving world data. Expect lag for a short while.</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saving...</span>
                <span class="console-line text-info">23:30:07 CONSOLE: [INFO] Saved the world</span>
                <span class="console-line">23:30:07 Server: Save Complete</span>
                <span class="console-line text-info">23:37:32 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line text-info">23:42:27 CONSOLE: [INFO] [STDOUT]: [jds.bibliocraft.blocks.BlockWeaponRack:func_149727_a:240]: angle = 0 face = 4</span>
                <span class="console-line">01:04:23 CONSOLE: R4VANG3R has left.</span>
                <span class="console-line text-info">01:04:23 CONSOLE: [INFO] R4VANG3R lost connection: TextComponent{text='Disconnected', siblings=[], style=Style{hasParent=false, color=null, bold=null, italic=null, underlined=null, obfuscated=null, clickEvent=null, hoverEvent=null}}</span>
                <span class="console-line text-info">01:04:24 CONSOLE: [INFO] R4VANG3R left the game</span>
                <span class="console-line text-warning">12:42:17 CONSOLE: [WARN]: Can't keep up! Did the system time change, or is the server overloaded? Running 41860755ms behind, skipping 837215 tick(s)</span>
                <span class="console-line">12:42:28 Server: Server shutting down immediately. World is being saved.</span>
            </div>

            <form class="form-inline console-input-form">
                {{--<div class="row">--}}
                    <div class="form-group col-md-11 col-xs-10">
                        <input type="text" class="form-control" id="console-input" placeholder="/console-command">
                    </div>

                    <div class="form-group col-md-1 col-xs-2">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                {{--</div>--}}
            </form>
        </section>
    </div>
@endsection

@section('js')
    @parent
    {{----}}
    @include('console.scripts')
@endsection

