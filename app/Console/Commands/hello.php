<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name=Ibrahima} {--L|lastname=Camara}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hello bro';

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
        //
        //$name=$this->argument('name');
      //  $name=$this->ask('What is your Name?');
        //$lname=$this->option('lastname');
        /*$lname=$this->secret('And your Lastname is?');
        $confirm=$this->confirm('do u want to print?');
        if ($confirm) {
            # code...
            $this->info($name.' '.$lname);
        }
*/

$header=['Name','Email'];
$user=User::select('name','email')->get();
$this->table($header,$user);
    }
}
