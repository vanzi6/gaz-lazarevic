<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap xml file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $getRouteCollection = \Route::getRoutes();
        $routesArray = [action('Controller@main')];
        $fileLocationName = config('sitemap.file_name');

    	foreach ($getRouteCollection as $route) {
            if ($route->getPrefix() === null && $route->uri !== '/') {
                $routesArray[] = action('Controller@'.$route->uri);
            }
    	}

        $content = \View::make(config('sitemap.view'), [
            'routes' => $routesArray
        ])->render();
    
        \Storage::disk('sitemaps')->put(config('sitemap.file_name'), $content);
    }
}
