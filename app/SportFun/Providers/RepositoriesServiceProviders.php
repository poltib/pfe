<?php namespace SportFun\providers;

use Illuminate\Support\ServiceProvider;
use SportFun\Repositories\Happening\Happening;

class RepositoriesServiceProviders extends ServiceProvider {

    /**
     * The interfaces that are implemented via Eloquent-based repositories.
     *
     * @var array
     */
    protected static $eloquentRepositories = [
        'User',
        'Post',
        'Message',
        'Happening',
        'Forum',
        'Category',
        'Team'
    ];

    /**
     * Register IoC bindings for the application’s repositories.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SportFun\Repositories\User\UserSportInterface', 'SportFun\Repositories\User\UserRepository');
        $this->app->bind('SportFun\Repositories\Happening\HappeningInterface', 'SportFun\Repositories\Happening\HappeningRepository');
        $this->app->bind('SportFun\Repositories\Team\TeamInterface', 'SportFun\Repositories\Team\TeamRepository');
        $this->app->bind('SportFun\Repositories\Message\MessageInterface', 'SportFun\Repositories\Message\MessageRepository');
        $this->app->bind('SportFun\Repositories\Post\PostInterface', 'SportFun\Repositories\Post\PostRepository');
        $this->app->bind('SportFun\Repositories\Category\CategoryInterface', 'SportFun\Repositories\Category\CategoryRepository');
        $this->app->bind('SportFun\Repositories\Forum\ForumInterface', 'SportFun\Repositories\Forum\ForumRepository');
        $this->app->bind('SportFun\Repositories\EventType\EventTypeInterface', 'SportFun\Repositories\EventType\EventTypeRepository');
    }

}