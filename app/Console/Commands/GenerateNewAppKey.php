<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Predis\Collection\Iterator;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Artisan;

class GenerateNewAppKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'key:recycle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recycle the application key if no active keys';

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

        $prefix = config('database.redis.options.prefix' );

        $keys = Redis::scan( 0, 'MATCH', "{$prefix}encrypted:*" );
        $items = count( $keys[1]);
        if( $items == 0 )
        {
            // there are no keys, so we can safely rotate our application key
            // without breaking any current records ability to be decrypted
            $this->info('Setting new application key');
            Artisan::call('key:generate' );
            $this->info('Done!');
        }
        else
        {
            $this->info("There are $items item(s) in redis, bailing.");
        }


    }
}
