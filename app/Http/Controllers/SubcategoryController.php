<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class SubcategoryController extends Controller
{

    public function index()
    {
        //
        $subcategories=Subcategory::with('category')->paginate(10);
        return view('cms.subcategory.index',compact('subcategories'));
    }


    public function create()
    {
        //
        return view('cms.subcategory.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'name.*' => ['required'],
        ]);
        $data=$request->only([
            'name','category_id'
        ]);

        $subcategories=Subcategory::create($data);
        $isSaved=$subcategories->save();
        if ($isSaved){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.Subcategory created successfully'));
            return redirect()->back();
        }else{
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to create subcategory!'));
            return redirect()->back();
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories=Category::all();
        $subcategories=Subcategory::findOrFail($id);
        return view('cms.subcategory.edit',compact('subcategories','categories'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->request->add(['id'=>$id]);
        $request->validate([
            'category_id'=>'required',
            'name.*'=>'required|string',
        ]);
        $subcategories=Subcategory::find($id);
        $subcategories->category_id=$request->get('category_id');
        $subcategories->name=$request->get('name');
        $isUpdated=$subcategories->save();
        if ($isUpdated){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.Subcategory updated successfully'));
            return redirect()->route('subcategories.index');

        }else{
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to update Subcategory!'));
            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        $isDeleted=Subcategory::destroy($id);
        if ($isDeleted){
            return response()->json([
                'title'=>'success',
                'text'=>trans('dashboard_trans.Subcategory deleted successfully'),
                'icon'=>'success',
            ]);
        }else{
            return response()->json([
                'title'=>'error',
                'text'=>trans('dashboard_trans.Failed to delete this subcategory!'),
                'icon'=>'error',
            ]);
        }
    }
}
