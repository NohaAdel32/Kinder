<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(3);
        return view('admin.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('admin.inserttestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $messages=$this->messages();
        $data=$request->validate([
         'clientName'=>'required|string|max:50',
         'profession'=> 'required|string',
         'image' => 'required|mimes:png,jpg,jpeg|max:2048',
         'content' => 'required|string',
         ]);
         $fileName = $this->uploadFile($request->image, 'assets/img');    
         $data['image'] = $fileName;
        $data['published']= isset($request->published);
        Testimonial::create($data);
        return redirect('admin/testi')->with('success', 'Insert Data Success');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $testimonial= Testimonial::findOrFail($id);
       return view('admin.showTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testi = Testimonial::findOrFail($id);
        return view ('admin.updateTestimonial', compact('testi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'clientName'=>'required|string|max:50',
            'profession'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'content' => 'required|string',
            ]);
            if ($request->hasFile('image')){
                $fileName = $this->uploadFile($request->image, 'assets/img');    
                 $data['image'] = $fileName;
            }
            $data['published']= isset($request->published);
             Testimonial::where('id', $id)->update($data);
           return redirect('admin/testi')->with('success', 'Update Data Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect('admin/testi')->with('danger', 'Delete Data Success');
    }
    public function trashed()
    {
       $testi= Testimonial::onlyTrashed()->paginate(3);
        return view('admin.trashTesti', compact('testi'));
    }
    public function forceDelete(string $id)
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect('admin/trashTesti')->with('danger', 'Delete Data Success');
    }

    public function restore(string $id)
    {
        Testimonial::where('id', $id)->restore();
        return redirect('admin/testi')->with('success', 'Restore Data Success');
    }
}
