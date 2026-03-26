<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;
use App\Http\Controllers\Controller;

class WeightController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Weight::query();

        if ($request->from) {
            $query->whereDate('date', '>=', $request->from);
        }

        if ($request->to) {
            $query->whereDate('date', '<=', $request->to);
        }

        $weights = $query->get();

        return view('weight.dashboard', compact('weights')); 
    }

    public function create()
    {
        return view('weight.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'weight' => 'required|numeric',
            'calories' => 'required|numeric',
            'exercise_time' => 'required',
            'exercise_content' => 'nullable',
        ],[
            'date.required' => '日付を入力してください',
            'date.date' => '正しい日付を入力してください',
            'weight.required' => '体重を入力してください',
            'weight.numeric' => '体重は数値で入力してください',
            'calories.required' => '摂取カロリーを入力してください',
            'calories.numeric' => '摂取カロリーは数値で入力してください',
            'exercise_time.required' => '運動時間を入力してください',
        ]);

        Weight::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content,
        ]);

        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $weight = Weight::findOrFail($id);
        return view('weight.edit', compact('weight'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'weight' => 'required|numeric',
            'calories' => 'required|numeric',
            'exercise_time' => 'required',
            'exercise_content' => 'nullable',
        ],[
            'date.required' => '日付を入力してください',
            'date.date' => '正しい日付を入力してください',
            'weight.required' => '体重を入力してください',
            'weight.numeric' => '体重は数値で入力してください',
            'calories.required' => '摂取カロリーを入力してください',
            'calories.numeric' => '摂取カロリーは数値で入力してください',
            'exercise_time.required' => '運動時間を入力してください',
        ]);

        $weight = Weight::findOrFail($id);

        $weight->update([
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content,
        ]);

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        Weight::findOrFail($id)->delete();
        return redirect('/dashboard');
    }

    public function show($id)
    {
        $weight = Weight::findOrFail($id);
        return view('weight.show', compact('weight'));
    }
}