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
        $this->registerBindings();
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
     * Register service provider bindings
     */
    public function registerBindings() {
        $this->app->bind(
            \Qclinic\Repositories\Frontend\Auth\AuthenticationContract::class,
            \Qclinic\Repositories\Frontend\Auth\EloquentAuthenticationRepository::class
        );

        $this->app->bind(
            \Qclinic\Repositories\Frontend\User\UserContract::class,
            \Qclinic\Repositories\Frontend\User\EloquentUserRepository::class
        );

        $this->app->bind(
            \Qclinic\Repositories\Backend\User\UserContract::class,
            \Qclinic\Repositories\Backend\User\EloquentUserRepository::class
        );

        $this->app->bind(
            \Qclinic\Repositories\Backend\Role\RoleRepositoryContract::class,
            \Qclinic\Repositories\Backend\Role\EloquentRoleRepository::class
        );

        /*$this->app->bind(
            \App\Repositories\Backend\Permission\PermissionRepositoryContract::class,
            \App\Repositories\Backend\Permission\EloquentPermissionRepository::class
        );

        $this->app->bind(
            \App\Repositories\Backend\Permission\Group\PermissionGroupRepositoryContract::class,
            \App\Repositories\Backend\Permission\Group\EloquentPermissionGroupRepository::class
        );

        $this->app->bind(
            \App\Repositories\Backend\Permission\Dependency\PermissionDependencyRepositoryContract::class,
            \App\Repositories\Backend\Permission\Dependency\EloquentPermissionDependencyRepository::class
        );*/
    }

    /**
     * Register the blade extender to use new blade sections
     */
    protected function registerBladeExtender() {
        AccessBladeExtender::attach($this->app);
    }


}
