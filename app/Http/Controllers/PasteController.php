<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paste;

class PasteController extends Controller
{

  function addPaste(Request $request) {

    $validated = $request->validate([
      'paste' => 'required|string'
    ]);
    $paste = new Paste;
    $paste->name = $request->name;
    $paste->paste = $request->paste;
    $paste->description = $request->description;
    $paste->save();

    return redirect('/welcome');
  }

  public function showPastes() {
    $pastes = Paste::all();
    return view('/archive', ['pastes' => $pastes]);
  }

  public function showData($id) {
    $data = Paste::find($id);
    return view('/paste', compact('data', 'id'));
  }
}
