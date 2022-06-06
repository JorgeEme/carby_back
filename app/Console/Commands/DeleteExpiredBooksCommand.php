<?php

namespace App\Console\Commands;

use App\Models\Book;
use App\Models\Vehicle;
use Illuminate\Console\Command;

class DeleteExpiredBooksCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'books:expireds';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete books expired';

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
     * @return int
     */
    public function handle()
    {
        $vehiclesIds = Book::where('ends_at', '<', now())->pluck('vehicle_id')->toArray();
        Vehicle::whereIn('id', $vehiclesIds)->update(['available' => true]);

        Book::where('ends_at', '<', now())->delete();
    }
}
