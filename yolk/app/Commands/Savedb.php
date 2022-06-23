<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class Savedb extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'commit';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Create  & Edit database tables';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        require '../test.php';

        createdb();
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
