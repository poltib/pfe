<?php namespace SportFun\providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProviders extends ServiceProvider
{
    /**
     * Register IoC bindings for the application’s repositories.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'SportFun\Repositories\UserSportInterface',
            'SportFun\Repositories\Eloquent\UserRepository');

        $this->app->bind(
            'SportFun\Repositories\HappeningInterface',
            'SportFun\Repositories\Eloquent\HappeningRepository');

        $this->app->bind(
            'SportFun\Repositories\TeamInterface',
            'SportFun\Repositories\Eloquent\TeamRepository');

        $this->app->bind(
            'SportFun\Repositories\MessageInterface',
            'SportFun\Repositories\Eloquent\MessageRepository');

        $this->app->bind(
            'SportFun\Repositories\PostInterface',
            'SportFun\Repositories\Eloquent\PostRepository');

        $this->app->bind(
            'SportFun\Repositories\CategoryInterface',
            'SportFun\Repositories\Eloquent\CategoryRepository');

        $this->app->bind(
            'SportFun\Repositories\ForumInterface',
            'SportFun\Repositories\Eloquent\ForumRepository');

        $this->app->bind(
            'SportFun\Repositories\EventTypeInterface',
            'SportFun\Repositories\Eloquent\EventTypeRepository');

    }
}