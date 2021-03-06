<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Helpers\AdminHelper;
use DB;
use View;

class BlockController extends Controller
{

    public static function header_body(){
        $menus = DB::table('menu')->select('id','name','alias','cursor')->where(['fk_parentid' => 0 , 'status' => 1 , 'menu_header' => 1])->orderBy('order','desc')->get();
        return view('frontend.block.header',compact('menus'));
    }

    public static function footer(){
        // $products = DB::table('product')->where('status',1)->select('id','name','link')->orderBy('order','desc')->orderBy('id','desc')->get();
        $posts_category = DB::table('posts_category')->select('id','name','alias')->where(['fk_parentid' => 0 , 'status' => 1 ,'pos_footer' => 1])->orderBy('order','desc')->orderBy('id','desc')->get();
        $menus = DB::table('menu')->select('id','name','alias','cursor')->where(['fk_parentid' => 0 , 'status' => 1 , 'menu_footer' => 1])->orderBy('order','desc')->get();
    	return view('frontend.block.footer',compact('posts_category','menus'));
    }

    public static function contact_sidebar(){
    	return view('frontend.block.contact_sidebar');
    }

    public static function customer_reviews(){
        $posts = DB::table('posts')->where(['status' => 1 , 'IsCustomer' => 1 ])->inRandomOrder()->select('name','image','description','content')->first();

    	return view('frontend.block.customer_reviews',compact('posts'));
    }

    public static function customer_reviews_page(){
        $posts = DB::table('posts')->where(['status' => 1 , 'IsCustomer' => 1 ])->orderBy('id','desc')->select('name','image','description','content')->paginate(10);

        return view('frontend.block.customer_reviews_page',compact('posts'));
    }

    public static function customer_support(){
    	return view('frontend.block.customer_support');
    }

    public static function posts_category_list(){
        $posts_category = DB::table('posts_category')->select('id','name','alias')->where(['fk_parentid' => 0 , 'status' => 1 ,'pos_home' => 1])->orderBy('order','desc')->orderBy('id','desc')->get();
        View::share('posts_category',$posts_category);
        $posts_category_all = DB::table('posts_category')->select('id','name','alias','fk_parentid')->where(['status' => 1])->orderBy('order','desc')->orderBy('id','desc')->get();
        return view('frontend.block.home.posts_category_list',compact('posts_category','posts_category_all'));
    }

    public static function banner(){
        $product_category = DB::table('product_category')->where('status',1)->select('id','name')->orderBy('order','desc')->orderBy('id','desc')->get();
        $banners = DB::table('banner')->select('name','image')->where(['status' => 1])->orderBy('order','desc')->orderBy('id','desc')->get();
    	return view('frontend.block.home.banner',compact('banners','product_category'));
    }

    public static function posts_category_list_2($index){
        $categories = DB::table('posts_category')->where('status',1)->select('id','fk_parentid')->get(); 
        $ids = AdminHelper::child_id($categories,$index->id);
        $ids[] = $index->id;
        $posts = DB::table('posts')->whereIn('fk_catid',$ids)->where('status',1)->select('id','name','alias','image','description','create_at')->orderBy('order','desc')->orderBy('id','desc')->paginate(10);
        $top_posts = DB::table('posts')->whereIn('fk_catid',$ids)->where('status',1)->select('id','name','alias','image','description','create_at')->orderBy('view','desc')->first();

        
        return view('frontend.block.posts_category.list',compact('index','posts','top_posts'));
    }

    public static function detail_posts($index){
        $category = DB::table('posts_category')->where('id',$index->fk_catid)->select('name','alias')->first();
        $same_posts = DB::table('posts')->where(['status' => 1 , 'fk_catid' => $index->fk_catid])->whereNotIn('id',[$index->id])->orderBy('order','desc')->orderBy('id','desc')->select('name','image','alias','create_at')->limit(8)->get();
        $latest_posts = DB::table('posts')->where('IsCustomer','!=',1)->where('fk_catid','!=',0)->where(['status' => 1])->orderBy('id','desc')->select('name','image','alias','create_at')->limit(8)->get();

        return view('frontend.block.posts.detail_posts',compact('index','category','same_posts','latest_posts'));
    }

    public static function focus_posts(){
        $focus_posts = DB::table('posts')->where('IsCustomer','!=',1)->where('fk_catid','!=',0)->where(['status' => 1])->orderBy('view','desc')->orderBy('order','desc')->orderBy('id','desc')->select('name','image','alias','create_at')->limit(5)->get();
        return view('frontend.block.posts.focus_posts',compact('focus_posts'));
    }

    public static function search($key){
        View::share('key',$key);
        $posts = DB::table('posts')->where('name','like',"%$key%")->orWhere('description','like',"%$key%")->where('status',1)->orderBy('order','desc')->orderBy('id','desc')->select('id','name','alias','image','description','create_at')->paginate(10);
        return view('frontend.block.search',compact('posts'));
    }
}
