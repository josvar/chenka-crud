@extends('backend.layouts.master')

@section('title')
Posts | ChenkaCrud
@stop

@section('title-box')
<div class="columns">
    <h2>Posts</h2>
</div>
@stop

@section('body-box')
<div class="columns">
    <div class="form-wrap ch-box">
        <!-- Form -->
        {{ Form::open(['route' => 'backend.posts.store']) }}
        <ul class="tabs header-tab-box" data-tab>
            <li class="tab-title active"><a href="#panel1-1">Content</a></li>
            <li class="tab-title"><a href="#panel1-2">Seo</a></li>
            <li class="tab-title"><a href="#panel1-3">Advanced</a></li>
        </ul>
        <div class="ch-box-row body-tab-box tabs-content">
            <div class="content active" id="panel1-1">

                @include('backend.posts.partials.create._form1')

            </div>
            <div class="content" id="panel1-2">

                @include('backend.posts.partials.create._form2')

            </div>

            <div class="content" id="panel1-3">
                <!-- Modules[block_two_columns] Form Input -->
                <div class="row">
                    <div class="columns">
                        <label>Modules[block_two_columns]:
                            {{ Form::text('modules[block_two_columns]', null, ['placeholder' => ''] ) }}
                        </label>
                    </div>
                </div>

            </div>
        </div>
        {{ Form::close() }}
    </div>
    <!-- end form-wrap-->
</div>
@stop