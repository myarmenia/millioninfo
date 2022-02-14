<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Branche;
use App\Models\Status;
use App\Models\Compni;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        
     $employees=Branche::where('types_of_activities','=', null)->skip(0)->take(10)->get();

     foreach($employees as $empl){

         $finde=Compni::where('id',$empl->company_id)->first();

         $employs=Branche::where('company_id',$finde->id)->update(['types_of_activities'=>$finde->types_of_activities]);
          echo "good";
     }



         \Log::info("Cron is working fine!");
     
        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
      
        $this->info('Demo:Cron Cummand Run successfully!');
    }
}
