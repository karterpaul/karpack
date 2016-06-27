<?php

namespace Karter\Test;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;
use Illuminate\Filesystem\Filesystem;


class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      //
      // irequire __DIR__ . '/../vendor/autoload.php';
  
      // $this->loadAutoloader(base_path('packages'));     
      
      // $this->app->make('Vendor\Package\Awesome');
  
 
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
       $this->app->bind('testpack', function()
        {
            //return new \App\Classes\TestFacade;
            return new \Karter\Test\Test;
        });

        
    }


}
