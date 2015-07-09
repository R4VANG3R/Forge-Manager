@extends('master.layout')

@section('title', 'Dashboard')

@section('meta')
    @parent
    {{--append here--}}
@endsection

@section('css')
    @parent
    {{--append here--}}
@endsection

@section('scripts')
    @parent
    {{--append here--}}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
@endsection

@section('body')
    @parent
    {{--append here--}}
    <div class="row">
        <div class="col-md-6">
            {{-- System resources chart --}}
            <h2 class="no-top-margin"><i class="fa fa-area-chart"></i> Server resource usage</h2>
            <div id="chart-resources"></div>
        </div>

        <div class="col-md-6">
            {{-- Concurrent players chart --}}
            <h2 class="no-top-margin"><i class="fa fa-area-chart"></i> Concurrent players</h2>
            <div id="chart-players"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>
                <i class="fa fa-info-circle"></i> Server information

                <div class="btn-group pull-right" role="group">
                    <button type="button" class="btn btn-primary"><i class="fa fa-play"></i> Start</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-repeat"></i> Restart</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-stop"></i> Stop</button>
                </div>
            </h2>

            <p>
                <i class="server-status fa fa-circle"></i> Server is online.&nbsp;
                <span title="Server uptime">
                    <i class="fa fa-clock-o"></i><span id="server-uptime"> 0 Days 4 Hours 11 Minutes.</span>
                </span>
            </p>
            <p title="Server uptime">

            </p>

            <h3>R4VANG3Rs FTB Server<br>
                <small>Infinity 1.7 with extras <span class="label label-default">MOTD</span></small>
            </h3>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Modpack</th>
                        <td>Feed the Beast: Infinity</td>
                    </tr>

                    <tr>
                        <th>Game mode</th>
                        <td>Survival</td>
                    </tr>

                    <tr>
                        <th>Difficulty</th>
                        <td>Normal</td>
                    </tr>

                    <tr>
                        <th>Hardcore mode</th>
                        <td>No</td>
                    </tr>
                </table>
            </div>

            {{--<div class="btn-group" role="group">--}}
                {{--<button type="button" class="btn btn-primary"><i class="fa fa-play"></i> Start</button>--}}
                {{--<button type="button" class="btn btn-default"><i class="fa fa-repeat"></i> Restart</button>--}}
                {{--<button type="button" class="btn btn-danger"><i class="fa fa-stop"></i> Stop</button>--}}
            {{--</div>--}}
        </div>

        <section class="col-md-6">
            <h2><i class="fa fa-users"></i> Online Players <small> <span id="currentPlayers">4</span> / <span id="maxPlayers">20</span></small></h2>

            <div class="players clearfix">
                <div class="player col-md-6">
                    <div class="player-box clearfix">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" title="Flag"><i class="fa fa-flag"></i></button>
                            <button type="button" class="btn btn-warning" title="Kick"><i class="fa fa-clock-o"></i></button>
                            <button type="button" class="btn btn-danger" title="Ban"><i class="fa fa-minus-circle"></i></button>
                        </div>

                        <img src="/img/steve.png" class="player-icon col-md-3 img-responsive">
                        <div class="col-md-9">
                            <h3 class="player-username">Direwolf20</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Online</th>
                                        <td class="player-time-online">2 Hours 10 Minutes.</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th>
                                        <td class="player-ip-address">192.168.1.1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="player col-md-6">
                    <div class="player-box clearfix">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" title="Flag"><i class="fa fa-flag"></i></button>
                            <button type="button" class="btn btn-warning" title="Kick"><i class="fa fa-clock-o"></i></button>
                            <button type="button" class="btn btn-danger" title="Ban"><i class="fa fa-minus-circle"></i></button>
                        </div>

                        <img src="/img/steve.png" class="player-icon col-md-3 img-responsive">
                        <div class="col-md-9">
                            <h3 class="player-username">Soaryn</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Online</th>
                                        <td class="player-time-online">2 Hours 10 Minutes.</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th>
                                        <td class="player-ip-address">192.168.1.1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="player col-md-6">
                    <div class="player-box clearfix">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" title="Flag"><i class="fa fa-flag"></i></button>
                            <button type="button" class="btn btn-warning" title="Kick"><i class="fa fa-clock-o"></i></button>
                            <button type="button" class="btn btn-danger" title="Ban"><i class="fa fa-minus-circle"></i></button>
                        </div>

                        <img src="/img/steve.png" class="player-icon col-md-3 img-responsive">
                        <div class="col-md-9">
                            <h3 class="player-username">RWTema</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Online</th>
                                        <td class="player-time-online">2 Hours 10 Minutes.</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th>
                                        <td class="player-ip-address">192.168.1.1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="player col-md-6">
                    <div class="player-box clearfix">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" title="Flag"><i class="fa fa-flag"></i></button>
                            <button type="button" class="btn btn-warning" title="Kick"><i class="fa fa-clock-o"></i></button>
                            <button type="button" class="btn btn-danger" title="Ban"><i class="fa fa-minus-circle"></i></button>
                        </div>

                        <img src="/img/steve.png" class="player-icon col-md-3 img-responsive">
                        <div class="col-md-9">
                            <h3 class="player-username">Fireball1725</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Online</th>
                                        <td class="player-time-online">2 Hours 10 Minutes.</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th>
                                        <td class="player-ip-address">192.168.1.1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    @parent
    {{----}}
    @include('dashboard.scripts')
@endsection
