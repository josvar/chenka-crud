<!-- Page Title Form Input -->
<div class="row">
    <div class="columns">
        <label>Page Title:
            {{ Form::text('seo_tags[title][value]', null, ['placeholder' => ''] ) }}
        </label>
    </div>
</div>

<!-- Description Form Input -->
<div class="row">
    <div class="columns">
        <label>Description:
            {{ Form::text('seo_tags[desc][value]', null, ['placeholder' => ''] ) }}
        </label>
    </div>
</div>

<div class="row">
    <div class="columns">
        <fieldset>
            <legend>OPEN GRAPH</legend>


            <!-- Open Graph Title Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Title:
                        {{ Form::text('seo_tags[og][og:title][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Description Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Description:
                        {{ Form::text('seo_tags[og][og:desc][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Type Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Type:
                        {{ Form::text('seo_tags[og][og:type][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Image Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Image:
                        {{ Form::text('seo_tags[og][og:image][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

        </fieldset>
    </div>
</div>

<div class="row">
    <div class="columns">
        <fieldset>
            <legend>TWITTER CARD</legend>


            <!-- Open Graph Title Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Title:
                        {{ Form::text('seo_tags[og][og:title][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Description Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Description:
                        {{ Form::text('seo_tags[og][og:desc][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Type Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Type:
                        {{ Form::text('seo_tags[og][og:type][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

            <!-- Open Graph Image Form Input -->
            <div class="row">
                <div class="columns">
                    <label>Open Graph Image:
                        {{ Form::text('seo_tags[og][og:image][value]', null, ['placeholder' => ''] ) }}
                    </label>
                </div>
            </div>

        </fieldset>
    </div>
</div>
