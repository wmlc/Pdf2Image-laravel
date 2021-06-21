<?php

namespace wmlc\Pdf2Image;

use Illuminate\Support\ServiceProvider;

class Pdf2ImageServiceProvider extends ServiceProvider
{
     /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Pdf2Image',function(){
            return new \wmlc\Pdf2Image\Pdf2ImageMaker();
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Pdf2Image'];
    }
    
}
