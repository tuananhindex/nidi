<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Helpers\AdminHelper;
use Input;
use DB;
use View;
use Route;
use App\Http\Controllers\frontend\BlockController;




class PageController extends Controller
{
    public $title = 'Công ty Giải pháp Công nghệ NiDi';
    public $description = '';
    public $keywords = '';
    public $product_category_all = '';

    public function __construct(){
        // $menu_top = DB::table('menu')->where(['status' => 1 , 'menu_top' => 1])->orderBy('order','desc')->orderBy('id','desc')->select('id','name','alias','fk_parentid','cursor')->get();
        // $menu_header = DB::table('menu')->where(['status' => 1 , 'menu_header' => 1])->orderBy('order','desc')->orderBy('id','desc')->select('id','name','alias','fk_parentid','cursor')->get();
        // $product_category_all = DB::table('product_category')->where('status',1)->select('id','fk_parentid')->get(); 
        // $this->product_category_all = $product_category_all;
        // View::share('menu_top',$menu_top);
        // View::share('menu_header',$menu_header);
        // View::share('product_category_all',$product_category_all);
    }

    public function tracking(){
        //return dd(Analytics::trackPage());
    }

    public function home(){
        // $categories = DB::table('yjx74_content')->select('id','images')->get();
        // foreach ($categories as $key => $value) {
        //     $arr = json_decode($value->images,true);
        //     $str = $arr['image_intro'];
        //     $arr2 = explode('/', $str);
        //     $data['image'] = '';
        //     if(count($arr2) > 1){
        //         $data['image'] = 'upload/backup/'.$arr2[1];
        //     }
            
            

        //     DB::table('posts')->where('id',$value->id)->update($data);
        // }
        $title = $this->title;
        $description = $this->description;
        $keywords = $this->keywords;
        return view('frontend.home',compact('title','description','keywords','product_category'));
    }

    public function product_category($alias,$filter = ''){
        $index = DB::table('product_category')->where('id',$alias)->orWhere('alias',$alias)->first();
        $categories = $this->product_category_all;
        $ids = AdminHelper::child_id($categories,$index->id);
        $categories_child = DB::table('product_category')->whereIn('id',$ids)->select('id','name','alias','image')->orderBy('order','desc')->orderBy('id','desc')->get();
        $parent_ids = AdminHelper::parent_id($categories,$index->fk_parentid);
        $categories_parent = DB::table('product_category')->whereIn('id',$parent_ids)->select('id','name','alias','image')->orderBy('order','desc')->orderBy('id','desc')->get();
        $ids[] = $index->id;
        $products = DB::table('product')->whereIn('fk_catid',$ids)->where('status',1);
        // Loc.
        if($filter == 'price-asc'){
            $products = $products->orderBy('price','asc')->orderBy('order','desc')->orderBy('id','desc')->paginate(12);
        }elseif($filter == 'price-desc'){
            $products = $products->orderBy('price','desc')->orderBy('order','desc')->orderBy('id','desc')->paginate(12);
        }elseif($filter == 'newest'){
            $products = $products->orderBy('id','desc')->paginate(12);
        }else{
            $products = $products->orderBy('order','desc')->orderBy('id','desc')->paginate(12);
        }
        $count_product = DB::table('product')->whereIn('fk_catid',$ids)->where('status',1)->orderBy('order','desc')->orderBy('id','desc')->count();
        
        $title = empty($index->meta_title) ? $index->name : $index->meta_title;
        $description = empty($index->meta_description) ? $index->name : $index->meta_description;
        $keywords = empty($index->meta_keywords) ? $index->name : $index->meta_keywords;
        return view('frontend.product_category',compact('index','categories_child','categories_parent','categories','products','count_product','title','description','keywords'));
    }

    public static function product($alias){
        $index = DB::table('product')->where('id',$alias)->orWhere('alias',$alias)->first();
        $category = DB::table('product_category')->where('id',$index->fk_catid)->select('name','alias')->first();
        $product_same = DB::table('product')->where(['status' => 1 , 'fk_catid' => $index->fk_catid])->whereNotIn('id',[$index->id])->orderBy('order','desc')->orderBy('id','desc')->select('name','price','image','alias')->limit(10)->get();
        $product_other = DB::table('product')->where(['status' => 1])->orderBy('order','desc')->orderBy('id','RAND()')->select('name','price','image','alias')->limit(10)->get();
        $title = empty($index->meta_title) ? $index->name : $index->meta_title;
        $description = empty($index->meta_description) ? $index->name : $index->meta_description;
        $keywords = empty($index->meta_keywords) ? $index->name : $index->meta_keywords;
        return view('frontend.product',compact('product_other','product_same','category','index','title','description','keywords'));
    }

    public function posts_category($alias){
        $index = DB::table('posts_category')->where('id',$alias)->orWhere('alias',$alias)->first();
        // $categories = DB::table('posts_category')->where('status',1)->select('id','fk_parentid')->get(); 
        // $ids = AdminHelper::child_id($categories,$index->id);
        // $categories_child = DB::table('posts_category')->whereIn('id',$ids)->select('id','name','alias','image')->orderBy('order','desc')->orderBy('id','desc')->get();
        // $parent_ids = AdminHelper::parent_id($categories,$index->fk_parentid);
        // $categories_parent = DB::table('posts_category')->whereIn('id',$parent_ids)->select('id','name','alias','image')->orderBy('order','desc')->orderBy('id','desc')->get();
        // $ids[] = $index->id;
        // $posts = DB::table('posts')->whereIn('fk_catid',$ids)->where('status',1)->orderBy('order','desc')->orderBy('id','desc')->select('id','name','alias','image','description','create_at')->paginate(10);
        $title = empty($index->meta_title) ? $index->name : $index->meta_title;
        $description = empty($index->meta_description) ? $index->name : $index->meta_description;
        $keywords = empty($index->meta_keywords) ? $index->name : $index->meta_keywords;
        //return dd($index);
        return view('frontend.posts_category',compact('index','posts','title','description','keywords'));
    }

    public function posts($alias){
        $index = DB::table('posts')->where('id',$alias)->orWhere('alias',$alias);
        $index->update(['view' => $index->first()->view + 1]);
        $index = $index->first();
        // $category = DB::table('posts_category')->where('id',$index->fk_catid)->select('name','alias')->first();
        // $same = DB::table('posts')->where(['status' => 1 , 'fk_catid' => $index->fk_catid])->whereNotIn('id',[$index->id])->orderBy('order','desc')->orderBy('id','desc')->select('name','image','alias','create_at')->limit(10)->get();
        $title = empty($index->meta_title) ? $index->name : $index->meta_title;
        $image = $index->image;
        $description = empty($index->meta_description) ? $index->name : $index->meta_description;
        $keywords = empty($index->meta_keywords) ? $index->name : $index->meta_keywords;
        if($index->fk_catid == 0){
            return view('frontend.static_posts',compact('index','title','description','keywords','image'));
        }
        return view('frontend.posts',compact('index','title','description','keywords'));
    }

    public function customer_reviews(){
        $title = $this->title;
        $description = $this->description;
        $keywords = $this->keywords;
        return view('frontend.customer_reviews',compact('title','description','keywords'));
    }

    public function search_get($key){
       
        $title = $this->title;
        return view('frontend.search',compact('key','title'));
    }

    public function search_post(Request $request){
        if(empty($request->key)){
            return redirect(route('home'));
        }
        return redirect(route('search.get',$request->key));
    }

    public function contact(){
        $title = $this->title;
        $description = $this->description;
        $keywords = $this->keywords;
        return view('frontend.contact',compact('title','description','keywords'));
    }

    public function menu($alias){
        $index = DB::table('menu')->where('alias',$alias)->first();
        switch ($index->cursor) {
            case 'posts':
                $route = 'posts';
                break;
            case 'posts_category':
                $route = 'posts.category';
                break;
            case 'product':
                $route = 'product';
                break;
            case 'product_category':
                $route = 'product.category';
                break;
            
            default:
                $route = 'posts';
                break;
        }
        return redirect()->route($route,$index->cursor_id);
        
    }

}
