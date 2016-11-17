@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')Toastr Notifications @parent

@stop
    {{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/toastr/css/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom_css/toastr.css') }}" rel="stylesheet" type="text/css" />
    @stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
                    <h1>Toastr Notifications</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fa fa-fw fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#">UI features</a>
                        </li>
                        <li>
                            Toastr Notifications
                        </li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fa fa-fw fa-bell-o"></i>
                                        Toastr Notifications
                                    </h3>
                                    <span class="pull-right">
                                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                                        <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label" for="title">
                                                    <h4>Title</h4>
                                                </label>
                                                <input id="title" type="text" class="form-control" value="Toastr Notifications" placeholder="Enter a title ..."></div>
                                            <div class="form-group">
                                                <label class="control-label" for="message">Message</label>
                                                <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ...">Gnome &amp; Growl type non-blocking notifications</textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-list">
                                                    <label for="closeButton">
                                                        <div class="checker" id="uniform-closeButton">
                                                            <span class="checked">
                                                                <input id="closeButton" type="checkbox" value="checked" checked="" class="input-small custom_icheck"></span>
                                                        </div>
                                                        Close Button
                                                    </label>
                                                    <label for="addBehaviorOnToastClick">
                                                        <div class="checker" id="uniform-addBehaviorOnToastClick">
                                                            <span>
                                                                <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-small custom_icheck"></span>
                                                        </div>
                                                        Add behavior on toast click
                                                    </label>
                                                    <label for="debugInfo">
                                                        <div class="checker" id="uniform-debugInfo">
                                                            <span>
                                                                <input id="debugInfo" type="checkbox" value="checked" class="input-small custom_icheck"></span>
                                                        </div>
                                                        Debug
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mar_left30">
                                            <div class="form-group" id="toastTypeGroup">
                                                <div class="toas_type_mar"><h4>Toast Type</h4></div>
                                                <div class="radio-list">
                                                        <div class="radio">
                                                            <span class="checked">
                                                                <input class="custom_radio" type="radio" name="toasts" value="success" checked=""></span> &nbsp;Success
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="toasts" value="info"></span> &nbsp;Info
                                                        </div>


                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="toasts" value="warning"></span> &nbsp;Warning
                                                        </div>


                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="toasts" value="error"></span> &nbsp;Error
                                                        </div>

                                                </div>
                                            </div>
                                            <div class="form-group" id="positionGroup">
                                                <div class="pos_mar"><h4>Position</h4></div>
                                                <div class="radio-list">
                                                        <div class="radio">
                                                            <span class="checked">
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-top-right" checked=""></span> &nbsp;Top Right
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-bottom-right"></span> &nbsp;Bottom Right
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-bottom-left"></span> &nbsp;Bottom Left
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-top-left"></span> &nbsp;Top Left
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-top-full-width"></span> &nbsp;Top Full Width
                                                        </div>

                                                        <div class="radio">
                                                            <span>
                                                                <input class="custom_radio" type="radio" name="positions" value="toast-bottom-full-width"></span> &nbsp;Bottom Full Width
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="control-label" for="showEasing">Show Easing</label>
                                                    <select class="form-control input-small" id="showEasing">
                                                        <option>swing</option>
                                                        <option>linear</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="hideEasing">Hide Easing</label>
                                                    <select id="hideEasing" class="form-control input-small">
                                                        <option>swing</option>
                                                        <option>linear</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="showMethod">Show Method</label>
                                                    <select id="showMethod" class="form-control input-small">
                                                        <option>show</option>
                                                        <option>fadeIn</option>
                                                        <option>slideDown</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="hideMethod">Hide Method</label>
                                                    <select class="form-control input-small" id="hideMethod">
                                                        <option>hide</option>
                                                        <option>fadeOut</option>
                                                        <option>slideUp</option>
                                                        <option>show</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <h4>Show and Duration</h4>
                                                    <label class="control-label" for="showDuration">Show Duration</label>
                                                    <input id="showDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                                    <label class="control-label" for="hideDuration">Hide Duration</label>
                                                    <input id="hideDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                                    <label class="control-label" for="timeOut">Time out</label>
                                                    <input id="timeOut" type="text" placeholder="ms" class="form-control input-small" value="5000">
                                                    <label class="control-label" for="timeOut">Extended time out</label>
                                                    <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control input-small" value="1000"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-responsive button-alignment btn-default" id="showtoast" style="margin-bottom:7px;">Show Toast</button>
                                            <button type="button" class="btn btn-responsive button-alignment btn-default" id="cleartoasts" style="margin-bottom:7px;">Clear Toasts</button>
                                            <button type="button" class="btn btn-responsive button-alignment btn-default" id="clearlasttoast" style="margin-bottom:7px;">Clear Last Toast</button>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row margin-top-10">
                                        <div class="col-md-12">
                                            <pre id="toastrOptions">HTML Code...</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </section>
                <!-- /.content --> @stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/toastr.js') }}" type="text/javascript"></script>
    <script>
        $('input[type="checkbox"].custom_icheck, input[type="radio"].custom_radio').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue',
            increaseArea: '20%'
        });
    </script>
@stop