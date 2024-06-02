<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class JadwalController extends Controller
{
    public function slot(){
        $jadwal = jadwal::all();
        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }

    public function inputJadwal(Request $request) 
    {
        $jadwal = jadwal::create([
            'hari' => $request -> hari,
            'status' => $request -> status,
            'jam_mulai' => $request -> jam_mulai,
            'jam_selesai' => $request -> jam_selesai
        ]);

        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }

    public function slotPertanggal(Request $request){
        $jadwal = jadwal::where('hari', $request -> hari) -> get();
        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }

    // public function slotPertanggal(Request $request){
    //     $jadwal = jadwal::join('forms', 'jadwals.hari', '=' , 'forms.hari') -> where('hari', $request -> hari) -> get();
    //     return response()->json(['is_success'=> true,'data' => $jadwal]);
    // }

    public function updateSlot(Request $request){
        $updateSlot = jadwal::where('hari', $request -> hari) 
        -> where('jam_mulai', $request -> jam_mulai) -> first();
        $updateSlot -> status = 1;
        $updateSlot -> save();

        $cekRutin = $request -> hariRutin;
        if($cekRutin != null){
            $updateSlot = jadwal::where('hari', $request -> hariRutin) 
            -> where('jam_mulai', $request -> jam_mulaiRutin) -> first();
            $updateSlot -> status = 1;
            $updateSlot -> save();
        }
        return response()->json(['is_success'=> true,'data' => $updateSlot]);
    }
    
}
