<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlotSim;

class slotSimController extends Controller
{
    public function listandoSlotSim()
    {
        $slotSim = SlotSim::orderBy('id', 'ASC')->paginate(5);

        return view('admin.slotsim')
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

        return redirect('/admin/slotsim/salvo');
    }
    public function alterandoSlotSim($id)
    {
        $slotSim = SlotSim::find($id);

        return view('adicionandoSlotSim')->with('slotSim', $slotSim);
    }

    public function modificandoSlotSim(Request $request, $id)
    {
        $slotSim = SlotSim::find($id);

        $request->validate([
            "quantidade" => "required|max:200"
        ]);

        $slotSim->quantidade = $request->input('quantidade');

        $slotSim->save();

        return redirect('/admin/slotsim/editado');
    }

    public function removendoSlotSim($id)
    {
        $slotSim = SlotSim::find($id);

        $slotSim->delete();

        return redirect('/admin/slotsim/excluido');
    }
}
