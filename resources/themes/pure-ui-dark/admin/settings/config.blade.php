<?php
    require($_SERVER['DOCUMENT_ROOT'].'/themes/pure-ui-dark/custom_config.php');
?>

@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'config'])

@section('title')
    Config
@endsection

@section('content-header')
    <h1>Pure UI Theme Configuration<small>Configure Pure UI theme to your liking :)</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Pure UI Theme Config</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <form action="<?='/themes/pure-ui-dark/vendor/save-data-theme.php';?>" method="POST">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Main</h3>
                    </div>
                    
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">Primary Color</label>
                                <div>
                                    <input type="color" class="form-control" name="main-color" value="<?=$main_color;?>"/>
                                </div>
                                <p class="text-muted"><small><code>Main color</code> change.</small></p>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Secondary Color</label>
                                <div>
                                    <input type="color" class="form-control" name="secondary-color" value="<?=$secondary_color;?>"/>
                                </div>
                                <p class="text-muted"><small><code>Secondary color</code> change.</small></p>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Third Color</label>
                                <div>
                                    <input type="color" class="form-control" name="third-color" value="<?=$third_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Only changes the <code>color of the 4 informations squares</code> at the top of the server console.</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Logo</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label class="control-label">Logo Sidebar</label>
                                <div>
                                    <input type="text" class="form-control" name="logo" value="<?=$logo;?>"/>
                                </div>
                                <p class="text-muted"><small>Indicate here the <code>full URL of the logo</code> (above the sidebar) that you want. <b>OR</b> simply <code>write text</code> if you want to write something yourself.</small></p>
                            </div>
                            <div class="form-group col-md-1">
                                <label class="control-label"></label>
                                <div>
                                    <p class="text-muted"><small><b>Does not work with relative paths.</b></small></p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Logo Login Page</label>
                                <div>
                                    <p class="text"><small>To change the <code>logo of the login page</code>, get your logo on your computer locally and name it <code>'logo.png'</code>. Then you have to upload it to the <code>'public' folder</code> and overwrite the old one.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Optional</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            
                            <div class="form-group col-md-3">
                                <label class="control-label">Box Color</label>
                                <div>
                                    <input type="color" class="form-control" name="box-color" value="<?=$box_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Change the <code>background color of all the boxes</code> in the panel.</small></p>
                            </div>
                            <div class="form-group col-md-5">
                                <label class="control-label">Sidebar Color</label>
                                <div>
                                    <input type="text" class="form-control" name="sidebar-color" value="<?=$sidebar_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Change the <code>color of the sidebar</code> here (white by default).</small></p>
                            </div>
                            <div class="form-group col-md-2">
                                <label class="control-label">Icons Color</label>
                                <div>
                                    <input type="color" class="form-control" name="icons-color" value="<?=$icons_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Change the <code>color of all the icons</code> in the navigation bar.</small></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Background Color</label>
                                <div>
                                    <input type="color" class="form-control" name="background-color" value="<?=$background_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Changing the <code>background color</code>, behind the different elements of the panel.</small></p>
                            </div>
                            <div class="form-group col-md-5">
                                <label class="control-label">Login Background Color</label>
                                <div>
                                    <input type="text" class="form-control" name="login-background-color" value="<?=$login_background_color;?>"/>
                                </div>
                                <p class="text-muted"><small>Go to the website <b><a href="https://mycolor.space/gradient" target="_blank">here</a></b> to choose a gradient.<br>You can also add a custom image by adding quotation marks: <code>"url(https://YourURLHere.com/YourImage.png)"</code>.</small></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label"></label>
                                <div>
                                    <p class="text-muted"><small>If you don't want to end up with a 500 error, I invite you <b>NOT TO PUT</b> a semicolon (<code>;</code>) at the end.</b></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-footer">
                        {!! csrf_field() !!}
                        <button type="submit" name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

