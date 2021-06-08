{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.admin')

@section('title')
    Administration
@endsection

@section('content-header')
    <h1>Administrative Overview<small>A quick glance at your system.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Index</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box
            @if($version->isLatestPanel())
                box-success
            @else
                box-danger
            @endif
        ">
            <div class="box-header with-border">
                <h3 class="box-title">System Information</h3>
            </div>
            <div class="box-body">
                @if ($version->isLatestPanel())
                    You are running Pterodactyl Panel version <code>{{ config('app.version') }}</code>. Your panel is up-to-date!<br><br>
                    Your theme is currently in version <code>{{ config('app.theme_version') }}</code>. Remember to look regularly on <a href="https://www.mc-market.org/resources/authors/165804/" target="_blank">MC-Market</a> / <a href="#" target="_blank">Revenact</a> / <a href="https://quub.io/teams/hook-devteam" target="_blank">Quub.io</a> or <a href="https://pterodactylmarket.com/team/5248463" target="_blank">Pterodactyl Market</a> so you do not forget the updates!
                @else
                    Your panel is <strong>not up-to-date!</strong> The latest version is <a href="https://github.com/Pterodactyl/Panel/releases/v{{ $version->getPanel() }}" target="_blank"><code>{{ $version->getPanel() }}</code></a> and you are currently running version <code>{{ config('app.version') }}</code>.
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Terms & Conditions and License</h3>
            </div>
            <div class="box-body">
                Reminder of Terms & Conditions:<br><br>
                    - There would be absolutely no refunds unless my product is not working for the versions stated in the description.<br>
                    - You are not allowed to sell or redistribute my resources in any way, shape or form. Your access to the resource will also be immediately revoked.<br>
                    - I try my best to update and maintain my products, but there is no guarantee there will be any future updates.<br>
                    - I am allowed to change the price of my product at any time.<br>
                    - I reserve the rights to change these Terms and Conditions at any time.<br><br>
                License granted only to : <b><code>Sundeep de Jongh</code></b>.
            </div>
        </div>
    </div>  
</div>
<div class="row">
    <div class="col-xs-6 col-sm-20 col-lg-20 text-center">
        <a href="{{ $version->getDiscord() }}" target="_blank"><button class="btn btn-warning" style="width:100%;"><i class="fa fa-fw fa-support"></i> Get Help <small>(via Discord)</small></button></a>
    </div>
    <div class="col-xs-6 col-sm-20 col-lg-20 text-center">
        <a href="http://discordapp.com/invite/DVCCgbx" target="_blank"><button class="btn btn-danger" style="width:100%;"><i class="fa fa-fw fa-comments"></i> Discord of Theme</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>
    <div class="col-xs-6 col-sm-20 col-lg-20 text-center">
        <a href="https://pterodactyl.io/project/introduction.html" target="_blank"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> Documentation</button></a>
    </div>
    <div class="col-xs-6 col-sm-20 col-lg-20 text-center">
        <a href="https://github.com/Pterodactyl/Panel" target="_blank"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-support"></i> Github</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>
    <div class="col-xs-6 col-sm-20 col-lg-20 text-center">
        <a href="https://www.paypal.me/PterodactylSoftware" target="_blank"><button class="btn btn-success" style="width:100%;"><i class="fa fa-fw fa-money"></i> Support the Project</button></a>
    </div>
</div>
@endsection
