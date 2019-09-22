<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlotSim;

class slotSimController extends Controller
{
    public function listandoSlotSim()
    {
        $slotSim = SlotSim::all();

        return view('listandoSlotSim')
            ->with('slotSim', $slotSim);
    }

    public function adicionandoSlotSim()
    {
        return view('adicionandoSlotSim');
    }

    public function salvandoSlotSim(Request $request)
    {
        $request->validate([
            "quantidade" => "required|max:50"
        ]);

        $slotSim = SlotSim::create([
            "quantidade" => $request->input('quantidade')
        ]);

        $slotSim->save();

        return redirect('/listandoSlotSim');
    }
    public function alterandoSlotSim($id){
        $slotSim = SlotSim::find($id);

        return view('adicionandoSlotSim')->with('slotSim', $slotSim);
    }

    public function modificandoSlotSim(Request $request, $id){
        $slotSim = SlotSim::find($id);

        $request->validate([
            "quantidade" => "required|max:200"
        ]);

        $slotSim->quantidade = $request->input('quantidade');

        $slotSim->save();

        return redirect('/slotSim');
    }

    public function removendoSlotSim($id){
        $slotSim = SlotSim::find($id);

        $slotSim->delete();

        return redirect('/slotSim');
    }
}
