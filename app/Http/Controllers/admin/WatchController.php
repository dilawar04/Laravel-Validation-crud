<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WatchController extends Controller
{
    public function index(){
        $watches = Watch::get();
        return view('admin/watch/index')->with(compact('watches'));
    }

    public function create(){
    return view('admin/watch/create');
    }

    public function store(){
        $validator = Validator::make(\request()->all(), [
            'color' => 'required|max:100|unique:parts',
            'weight' => 'required|max:11|unique:parts',
            'brand' => 'required|max:100|unique:parts',
            'material' => 'required|max:100|unique:parts',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        Watch::create([
            'color' => request()->get('color'),
            'weight' => request()->get('weight'),
            'brand' => request()->get('brand'),
            'material' => request()->get('material'),
        ]);
        return redirect('/admin/watch');
    }

    public function edit($id){
        $watch = Watch::find($id);
    return view('Admin/watch/edit')->with(compact('watch'));
    }

    public function update(Request $request, $id){
        $watch = Watch::find($id);
        $validator = Validator::make(\request()->all(), [
            'color' => 'required|max:100|unique:parts,color,'.$watch->id,
            'weight' => 'required|max:11|unique:parts,weight,'.$watch->id,
            'brand' => 'required|max:100|unique:parts,brand,'.$watch->id,
            'material' => 'required|max:100|unique:parts,material,'.$watch->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        $watch->update([
            'color' => request()->get('color'),
            'weight' => request()->get('weight'),
            'brand' => request()->get('brand'),
            'material' => request()->get('material'),
        ]);
        return redirect('admin/watch');
    }

    public function destroy($id){
        $watch = Watch::find($id);
        $watch->delete();
        return redirect('admin/watch');
    }
}
