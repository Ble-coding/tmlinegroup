<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Console\Scheduling\Schedule;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // SitemapGenerator::create(config('app.url'))
        // ->writeToFile(public_path('sitemap.xml'));

        // $this->info('Sitemap generated successfully!');
    }
}
