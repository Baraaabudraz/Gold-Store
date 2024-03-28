<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Industry;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        if (Auth::guard('admin')->check()){
            $products = Product::query()->with(['category'])->latest()->paginate(10);
            return view('cms.product.index',compact('products'));
        }
    }


    public function create()

    {
        //
        $categories=Category::query()->latest()->get();
        return view('cms.product.create',compact('categories'));
    }


    public function store(Request $request)

    {
        $request->validate([
            'name.*'=> 'required' ,
            'price'=> 'required|required|numeric' ,
            'category_id'=>'required|integer|exists:categories,id',
            'description.*'=> 'required' ,
            'additional_info.*'=> 'nullable' ,
            'image.*'=>'required',
        ]);
        $data = $this->getOnly($request);
        $products = Product::query()->create($data);
        if ($products){
            session()->flash('alert-type', 'alert-success');
            session()->flash('message', trans('dashboard_trans.Product created successfully'));
        }else{
            session()->flash('alert-type', 'alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to create product'));
        }
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $products=Product::findOrFail($id);
        $categories=Category::with('subcategory')->get();
        return view('cms.product.edit',compact('products','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name.*'=>'required|string',
            'price'=> 'required|required|numeric' ,
            'image'=>'image',
            'description.*'=>'required',
            'additional_info.*'=>'nullable',
            'category_id'=>'required',
        ]);
        $data = $this->getOnly($request);
        $products = Product::find($id)->update($data);
        if ($products){
            session()->flash('alert-type','alert-success');
            session()->flash('message',trans('dashboard_trans.Product updated successfully'));
            return redirect()->route('products.index');
        }else{
            session()->flash('alert-type','alert-danger');
            session()->flash('message',trans('dashboard_trans.Failed to update product'));
            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        $isDeleted=Product::destroy($id);
            if($isDeleted){
                return response()->json([
                    'title'=>'success',
                    'icon'=>'success',
                    'text'=>trans('dashboard_trans.Product deleted successfully'),
                ]);
            }else{
                return response()->json([
                    'title'=>'error',
                    'icon'=>'error',
                    'text'=>trans('dashboard_trans.Failed to delete this product!'),
                ]);
            }

    }

    public function loadSubCategories(Request $request){
//        dd($request->category_id);
        $subcategories  = Subcategory::query()->where('category_id',$request->category_id)->pluck('name','id');
        return response()->json($subcategories);
    }
    public function loadIndustries(Request $request){
//        dd($request->category_id);
        $industries  = Industry::all()->pluck('name','id');
        return response()->json($industries);
    }
    /**
     * @param Request $request
     * @return array
     */
    public function getOnly(Request $request): array
    {
        $data = $request->only([
            'name', 'price' ,'description', 'additional_info', 'category_id',
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $Image = $image;
                $imageName = $Image->getClientOriginalName() . '_' . $Image->getClientOriginalExtension();
                $images[] = $imageName;
                $Image->move('images/product', $imageName);
            }
            $data['image'] = json_encode($images);
        }

        return $data;

    }

}
