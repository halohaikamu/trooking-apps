<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        $tracking = Tracking::latest()->when(request()->search, function($tracking) {
            $tracking = $tracking->where('nomer_resi', 'like', '%'. request()->search . '%');
            $tracking = $tracking->where('status', 'like', '%'. request()->search . '%');
        })->paginate(10);

        return view('admin.tracking.index', compact('tracking'));
    }

    public function create()
    {
        return view('admin.tracking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomer_resi' => 'required',
            'status' => 'required',
        ]);
        Tracking::create($request->all());

        return redirect()->route('tracking.index')
            ->withSuccess(__('Tracking created successfully.'));
    }

    public function show(Tracking $tracking)
    {
        return view('admin.tracking.show',compact('tracking'));
    }

    public function edit(Tracking $tracking)
    {
        return view('admin.tracking.edit',compact('tracking'));
    }

    public function update(Request $request, Tracking $tracking){
        $request->validate([
            'nomer_resi' => 'required',
            'status' => 'required',
        ]);
        $tracking = Tracking::findOrFail($tracking->id);
        $tracking->update($request->all());
        return redirect()->route('tracking.index',compact('tracking'))
            ->withSuccess(__('Tracking updated successfully.'));
    }

    public function destroy(Tracking $tracking)
    {
        $tracking = Tracking::findOrFail($tracking->id);
        $tracking->delete();
        return redirect()->route('tracking.index',$tracking)->with('success','Tracking deleted successfully');
    }
}
