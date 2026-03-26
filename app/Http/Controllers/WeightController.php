<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;
use App\Http\Controllers\Controller;  // ←これを追加

class WeightController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{
    $weights = Weight::where('user_id', auth()->id())->get();
    return view('weight.dashboard', compact('weights'));
}

    public function create()
    {
        return view('weight.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric|between:0,999.9',
            'target_weight' => 'required|numeric|between:0,999.9',
        ]);

        Weight::create([
            'user_id' => auth()->id(),
            'weight' => $request->weight,
            'target_weight' => $request->target_weight,
        ]);

        return redirect('/dashboard')
            ->with('success','アカウント登録が完了しました。');
    }

    public function edit($id)
    {
        $weight = Weight::find($id);
        return view('weight.edit', compact('weight'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'weight' => 'required|numeric|between:0,999.9',
            'target_weight' => 'required|numeric|between:0,999.9',
        ]);

        $weight = Weight::find($id);

        $weight->update([
            'weight' => $request->weight,
            'target_weight' => $request->target_weight,
        ]);

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        Weight::find($id)->delete();
        return redirect('/dashboard');
    }
    public function show($id)
{
    $weight = Weight::find($id);
    return view('weight.show', compact('weight'));
}
}