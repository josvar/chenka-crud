<!-- Title Form Input -->
<div class="row">
    <div class="columns title-wrap">
        <label>Title:
            {{ Form::text('main[title][value]', null, ['placeholder' => ''] ) }}
        </label>
    </div>
</div>

<!-- Abstract Form Input -->
<div class="row">
    <div class="columns edit-form-section">
        <label>Abstract:
            {{ Form::textarea('main[abstract][value]', null, ['placeholder' => '', 'cols' => '30', 'rows' => '5'] ) }}
        </label>
    </div>
</div>

<!-- Content Form Input -->
<div class="row">
    <div class="columns edit-form-section">
        <label>Content:
            {{ Form::textarea('main[content][content][value]', null, ['placeholder' => '', 'cols' => '30', 'rows' => '5'] ) }}
        </label>
    </div>
</div>

<!-- Send Form Input -->
<div class="row">
    <div class="columns">
        {{ Form::submit('Send', ['class' => 'button small'] ) }}
        {{ Form::button('Back', ['class' => 'button small'] ) }}
    </div>
</div>






 