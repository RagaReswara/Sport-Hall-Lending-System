<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\jadwal;
use App\Models\form;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    public function resetStatusJadwal(){
        $jadwal = jadwal::where('status', 1) -> get();
        foreach($jadwal as $slot){
            $slot -> status = 0;
            $slot -> save();
        }
    }

    // HAPUS ITEM KALO LEWAT TANGGAL NYA
    public function insertHistory(){
        $currentDate = Carbon::today();
        $form = form::where('tanggal', '<', $currentDate) -> where('status', 2) -> get();
        foreach($form as $tgl){
            $tgl -> status = 3;
            $tgl -> save();
        }
    }

    protected function schedule(Schedule $schedule): void
    {
        $schedule -> call(function(){
            $this -> resetStatusJadwal();
        }) -> everyMinute();
        $schedule -> call(function(){
            $this -> insertHistory();
        }) -> everyMinute();

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
