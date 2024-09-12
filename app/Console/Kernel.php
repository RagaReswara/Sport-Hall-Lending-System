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
        $forms = Form::whereNotIn('kat_kegiatan', ['Event', 'Rutin'])->get();
        $allJadwal = [];

        // Iterate through each form record
        foreach ($forms as $item) {
            $getSlot = $item->slot;

            // Check if the slot attribute is properly formatted
            if (!is_null($getSlot) && strpos($getSlot, '-') !== false) {
                list($startSlot, $endSlot) = explode('-', $getSlot);
                $startSlot = trim($startSlot);
                $endSlot = trim($endSlot);

                // Fetch matching Jadwal records
                $jadwalRecords = Jadwal::where('hari', $item->hari)
                                    ->where('jam_mulai', $startSlot)
                                    ->get();

                // Update each Jadwal record's status and add to the allJadwal array
                foreach ($jadwalRecords as $jadwal) {
                    $jadwal->status = 0;
                    $jadwal->save();
                    $allJadwal[] = $jadwal;
                }
            }
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
