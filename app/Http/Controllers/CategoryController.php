<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $categories=Category::latest()->paginate(10);
        return view('cms.category.index',compact('categories'));
    }

    public function create()
    {
        //
        return view('cms.category.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name.*'=>'required|unique:categories,name',
            'description.*'=>'required',
            'image'=>'required|image',
        ]);
        $data=$request->only([
           'name','description',
        ]);
        if ($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('category'),$image);
        }
        $data['image']=$image;
        $categories=Category::create($data);
        $isSaved=$categories->save();
        if ($isSaved){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.Category created successfully'));
            return redirect()->back();
        }else
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to create category'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
        $categories=Category::findOrFail($id);
        return view('cms.category.edit',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->request->add(['id' => $id]);
        $request->validate( [
            'name.*' => 'required|string|unique:categories,name,' . $id,
            'description.*' => 'required',
            'image' => '',
        ]);
        $data=$request->only([
            'name','description',
        ]);

        if ($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('category'),$image);
            $data['image'] = $image;
        }

        $categories = Category::find($id)->update($data);
        if ($categories) {
            session()->flash('alert-type', 'alert-success');
            session()->flash('message',trans('dashboard_trans.Category updated successfully'));
            return redirect()->route('categories.index');
        }else{
            session()->flash('alert-type', 'alert-danger');
            session()->flash('message', trans('dashboard_trans.Failed to update category'));
            return redirect()->back()->with('message', );
        }
    }
    public function destroy($id)
    {
        //
        $isDeleted=Category::destroy($id);
        if ($isDeleted){
            return response()->json([
               'title'=>'success',
               'icon'=>'success',
               'text'=>trans('dashboard_trans.Category deleted successfully'),
            ]);
        }else{
            return response()->json([
                'title'=>'error',
                'icon'=>'error',
                'text'=>trans('dashboard_trans.Failed to delete this category'),
            ]);

        }
    }
}
