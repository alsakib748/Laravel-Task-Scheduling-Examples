<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Added';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $data['name'] = 'Al Sakib';
        $data['email'] = 'sakibcse'.rand(111,999).'@gmail.com';
        $data['mobile'] = '01798754632';
        $data['password'] = \Hash::make(value: 'sakib123');
        $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();

        DB::table('users')->insert($data);

        $this->info('success');

    }
}
