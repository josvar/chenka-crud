@extends('backend.layouts.master')

@section('title')
Dashboard | ChenkaCrud
@stop

@section('title-box')
<div class="columns">
    <h2>Dashboard</h2>
</div>
@stop

@section('body-box')
<div class="columns">
    <div class="form-wrap ch-box">
        <form action="">
            <ul class="tabs header-tab-box" data-tab>
                <li class="tab-title active"><a href="#panel1-1">Content</a></li>
                <li class="tab-title"><a href="#panel1-2">Seo</a></li>
                <li class="tab-title"><a href="#panel1-3">Tab 3</a></li>
                <li class="tab-title"><a href="#panel1-4">Tab 4</a></li>
            </ul>
            <div class="ch-box-row body-tab-box tabs-content">
                <div class="content active" id="panel1-1">
                    <div class="require-form-body-box-add-post"></div>
                    <div class="require-form-publish-box"></div>
                    <div class="require-form-box"></div>
                    <div class="require-form-box"></div>
                    <div class="require-form-box"></div>
                    <div class="require-form-box"></div>
                </div>
                <div class="content" id="panel1-2">
                    <div class="columns">
                        <h3>SEO DATA</h3>
                        <label>Title *
                            <input id="title" type="text" placeholder=""/>
                        </label>
                    </div>
                </div>
            </div>
        </form>
        <!-- end form -->
    </div>
    <!-- end form-wrap-->

    <div class="small-12 large-6 columns">
        <div class="ch-box">
            <div class="header-box">
                <h3 class="title">Nuevo</h3>
            </div>
            <div class="body-box row">

                <div class="columns">
                    <h4>titlo h4</h4>

                    <p>Aver este parrafo que onda</p>
                </div>
            </div>

        </div>
    </div>
    <div class="small-12 large-6 columns">
        <div class="ch-box">
            <div class="header-box">
                <h3 class="title">Nuevo</h3>
            </div>
            <div class="body-box row">
                <div class="columns">
                    <h4>titlo h4</h4>

                    <p>Aver este parrafo que onda</p>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('scripts')
@parent

<!-- tododev: eliminar esta mierda -->
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