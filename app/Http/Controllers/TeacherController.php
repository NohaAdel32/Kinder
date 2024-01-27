<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::paginate(3);
        return view('admin.teachers', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.insertteacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$data=$request->validate([
            'teacherName'=>'required|string|max:50',
            'position'=> 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'facebook' => 'required',
            'twiter' => 'required',
            'instagram' => 'required',
            ]);
            $fileName = $this->uploadFile($request->image, 'assets/img');    
            $data['image'] = $fileName;        
           $data['active']= isset($request->active);
           Teacher::create($data);
           return redirect('admin/teach')->with('success', 'Insert Data Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher= Teacher::findOrFail($id);
       return view('admin.showTeacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view ('admin.updateTeacher', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'teacherName'=>'required|string|max:50',
            'position'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'facebook' => 'required',
            'twiter' => 'required',
            'instagram' => 'required',
            ]);
            if ($request->hasFile('image')){
                $fileName = $this->uploadFile($request->image, 'assets/img');    
                 $data['image'] = $fileName;
            }
            $data['active']= isset($request->active);
             Teacher::where('id', $id)->update($data);
           return redirect('admin/teach')->with('success', 'Update Data Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect('admin/teach')->with('danger', 'Delete Data Success');
    }
    public function trashed()
    {
       $teacher= Teacher::onlyTrashed()->paginate(3);
        return view('admin.trashTeacher', compact('teacher'));
    }
    public function forceDelete(string $id)
    {
        Teacher::where('id', $id)->forceDelete();
        return redirect('admin/trashTeacher')->with('danger', 'Delete Data Success');
    }

    public function restore(string $id)
    {
        Teacher::where('id', $id)->restore();
        return redirect('admin/teach')->with('success', 'Restore Data Success');
    }

}
