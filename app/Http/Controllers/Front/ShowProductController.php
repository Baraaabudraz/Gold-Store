<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Industry;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Section;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::query()->with('category')->latest()->limit(12)->get();
        $categories = Category::query()->latest()->get();
        $randomActiveProducts = Product::query()->inRandomOrder()->limit(4)->get();
        $randomActiveProductIds = [];
        foreach ($randomActiveProducts as $product) {
            array_push($randomActiveProductIds, $product->id);
        }
        $randomItemProducts = Product::query()->where('id','!=', $randomActiveProductIds)->limit(3)->get();
        $sliders=Slider::all();
        $sponsors=Sponsor::all();
        return view('frontend.index-new', compact('products','categories','sliders', 'randomItemProducts','sponsors', 'randomActiveProducts'));

    }

    public function show($id)
    {
        $product = Product::query()->with('category')->find($id);
        $category_products = Product::query()->inRandomOrder()->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)->get();

        $ratingsSum = $product->comments->sum('review');
        $ratingsCount = $product->comments->count();
        if ($ratingsCount > 0){
            $avgRating=round($ratingsSum/$ratingsCount,2);
            $avgStarRating=round($ratingsSum/$ratingsCount);
        }else{
            $avgRating=0;
            $avgStarRating=0;
        }

        return view('frontend.show-product', compact('product','avgRating','avgStarRating','category_products'));

    }

    public function allCategory(Request $request , Category $category)
    {
//        dd($category);
//        $category = Category::query()->findOrFail($category->id);

      if ($request->min||$request->max){
            $products=$this->filterByPrice($request);
        }else {
            $products = Product::query()->where('category_id', $category->id)->get();

        }
        return view('frontend.category', compact('category','products'));

    }
    public function allProducts(Request $request){
        if ($request->search) {
            $products = Product::query()->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->paginate(30);
            $categories=Category::all();
            return view('frontend.all-product',compact('products','categories'));
        }
        $categories=Category::all();
        $products = Product::query()->with('category')->latest()->paginate(30);
        return view('frontend.all-product',compact('products','categories'));

    }

//    public function filterProducts(Request $request)
//    {
//        $catId = [];
//        $category = Category::query()->whereIn('id', $request->category)->get();
//        foreach ($category as $cat) {
//            array_push($catId, $cat->id);
//        }
//        $products = Product::query()->whereIn('category_id', $catId)->get();
//        return $products;
//    }

    public function filterByPrice(Request $request)
    {
        $categoryId=$request->categoryId;
        $product = Product::query()->whereBetween('price',[$request->min,$request->max])->where('category_id',$categoryId)->get();
        return $product;
    }
//    public function moreProducts(Request $request){
//        if ($request->search){
//            $products=Product::query()->where('name','like','%'.$request->search.'%')
//                ->orWhere('description','like','%'.$request->search.'%')
//                ->orWhere('additional_info','like','%'.$request->search.'%')
//                ->paginate(50);
//            return view('frontend.all-product',compact('products'));
//        }
//        $products=Product::query()->latest()->paginate(50);
//        return view('frontend.all-product',compact('products'));
//    }

    public function blog(Request $request)
    {
        if ($request->search) {
            $posts = Post::query()->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('section_id', 'like', '%' . $request->search . '%')
                ->paginate(50);
            $sections=Section::all();
            $randomActivePosts = Post::query()->inRandomOrder()->where('id', '!=', $posts)->limit(4)->get();
            return view('frontend.blog', compact('posts','sections','randomActivePosts'));
        }
        $posts=Post::query()->with('section')->latest()->paginate(10);
        $sections=Section::all();
        $randomActivePosts = Post::query()->inRandomOrder()->limit(4)->where('id', '!=', $posts)->get();
        return view('frontend.blog',compact('posts','sections','randomActivePosts'));
    }

    public function showPost($id){
        $posts = Post::query()->with('section')->find($id);
        $randomActivePosts = Post::query()->inRandomOrder()->limit(4)->where('id', '!=', $posts->id)->get();
        $sections=Section::all();
        return view('frontend.show-post',compact('posts','sections','randomActivePosts'));
    }

//    public function order(){
//        $orders = auth()->user()->orders;
//        return view('frontend.show-orders',compact('orders'));
//
//    }
}
