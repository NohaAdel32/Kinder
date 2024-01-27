<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KiderClass;
use App\Models\Teacher;
use App\Traits\Common;

class ClassController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class = KiderClass::get();
        return view('admin.classes', compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers= Teacher::get();
        return view('admin.insertClass', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'className'=>'required|string|max:50',
            'fromAge'=> 'required|integer',
            'toAge'=> 'required|integer',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'fromTime' => 'required',
            'toTime' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'teacher_id' => 'required',
            ]);
            $fileName = $this->uploadFile($request->image, 'assets/img');    
            $data['image'] = $fileName;        
           $data['active']= isset($request->active);
           KiderClass::create($data);
           return redirect('admin/kiderClass')->with('success', 'Insert Data Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class= KiderClass::findOrFail($id);
        return view('admin.showClass', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers= Teacher::get();
        $class = KiderClass::findOrFail($id);
        return view('admin.updateClass', compact('class', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'className'=>'required|string|max:50',
            'fromAge'=> 'required|integer',
            'toAge'=> 'required|integer',
            'image' => 'somtimes|mimes:png,jpg,jpeg|max:2048',
            'fromTime' => 'required',
            'toTime' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'teacher_id' => 'required',
            ]);
            if ($request->hasFile('image')){
                $fileName = $this->uploadFile($request->image, 'assets/img');    
                 $data['image'] = $fileName;
            }
            $data['active']= isset($request->active);
             KiderClass::where('id', $id)->update($data);
           return redirect('admin/kiderClass')->with('success', 'Update Data Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       KiderClass::where('id', $id)->delete();
        return redirect('admin/kiderClass')->with('danger', 'Delete Data Success');
    }
    public function trashed()
    {
       $class= KiderClass::onlyTrashed()->get();
        return view('admin.trashClass', compact('class'));
    }
    public function forceDelete(string $id)
    {
        KiderClass::where('id', $id)->forceDelete();
        return redirect('admin/trashClass')->with('danger', 'Delete Data Success');
    }

    public function restore(string $id)
    {
        KiderClass::where('id', $id)->restore();
        return redirect('admin/kiderClass')->with('success', 'Restore Data Success');
    }

}
