@extends('backend.layouts.master')

@section('title')
ChenkaCrud | Dashboard
@stop

@section('title-box')
    <h2>Dashboard</h2>
@stop

@section('body-box')
<form action="">
    <ul class="tabs header-tab-box" data-tab>
        <li class="tab-title active"><a href="#panel1-1">Content</a></li>
        <li class="tab-title"><a href="#panel1-2">Seo</a></li>
        <li class="tab-title"><a href="#panel1-3">Advance</a></li>
    </ul>
    <div class="body-tab-box tabs-content">
        <div class="content active" id="panel1-1">
            <div class="row">
                <div class="columns">
                    <a href="/backend/logout" class="button tiny">Logout</a>
                </div>
            </div>
        </div>
        <div class="content" id="panel1-2">
            <div class="row">
                <div class="columns">
                    <label>Seo Title *
                        <input id="title" type="text" placeholder=""/>
                    </label>
                </div>
            </div>
        </div>
        <div class="content" id="panel1-3">
            <div class="row">
                <div class="columns">
                    <label>Advance Title *
                        <input id="title" type="text" placeholder=""/>
                    </label>
                </div>
            </div>
        </div>
    </div>
</form>
@stop

@section('scripts')
@parent
<script src="{{ asset('statics/bower_components/ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace('editor1', {});
    CKEDITOR.replace('editor2', {
        extraPlugins: 'image2',
        filebrowserBrowseUrl: '/browser/browse.php',
        filebrowserUploadUrl: '/uploader/upload.php'
    });
</script>
@stop