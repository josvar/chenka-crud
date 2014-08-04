<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'ChenkaCrud')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="{{ asset('statics/favicon.ico') }}">
    @section('styles')
    <link rel="stylesheet" href="{{ asset('statics/bower_components/foundation-icon-fonts/foundation-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('statics/styles/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('statics/styles/main.css') }}"/>
    <script src="{{ asset('statics/scripts/vendor/modernizr.js') }}"></script>
    @show

</head>
<body class="dashboard">

<div class="ch-wrap">
    <div id="admin-menu-background"></div>
    <div id="require-sidebar"></div>
    <div class="ch-content">
        @include('backend.partials._topbar')
        <div class="ch-body">
            <div class="title-section-row">
                @yield('title-box')
            </div>
            <div class="row">
                <div class="columns">
                    <div class="form-wrap ch-box">
                        @yield('body-box', 'Content Body')
                    </div>
                </div>
            </div>
            <!-- end form-wrap-->
            <div class="clear-both"></div>
        </div>
        <div class="clear-both"></div>
    </div>
    <div class="clear-both"></div>
    <!-- end ch-content -->
</div>
<!-- end ch-wrap-->


@section('scripts')
<script src="{{ asset('statics/scripts/vendor.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>

<script src="{{ asset('statics/scripts/main.js') }}"></script>

<script>
    $(document).foundation();
</script>
@show
</body>
</html>