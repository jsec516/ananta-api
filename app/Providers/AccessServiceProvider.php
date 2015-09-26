<?php

namespace Qclinic\Providers;

use Qclinic\Services\Access\Access;
use Illuminate\Support\ServiceProvider;
use Qclinic\Services\Blade\Access\AccessBladeExtender;

class AccessServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerBladeExtender();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAccess();
        $this->registerFacade();
        //$this->registerBindings();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerAccess()
    {
        $this->app->bind('access', function($app) {
            return new Access($app);
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Access', \Qclinic\Services\Access\Facades\Access::class);
        });
    }

    /**
     * Register the blade extender to use new blade sections
     */
    protected function registerBladeExtender() {
        AccessBladeExtender::attach($this->app);
    }


}
