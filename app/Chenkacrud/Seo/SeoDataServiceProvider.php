<?php namespace Chenkacrud\Seo;

use Illuminate\Support\ServiceProvider;

class SeoDataServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('seodata', function()
        {
            $creatorSeoData = new SeoDataCreator( new SeoDataBuilder() );

            return $creatorSeoData;
        });
    }
}