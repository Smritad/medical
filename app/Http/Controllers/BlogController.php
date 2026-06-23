<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class BlogController extends Controller
{
    public function blog_category_show()
	{
		$fetch_all_categories = DB::table('blogs_category')
							->get();
		return view('admin.blog-category',compact('fetch_all_categories'));
	}
	public function blog_category_insert(Request $request)
	{
		$category_name = $request->input('category_name');
		$slug = $request->input('slug');
		$values = array('category_name'=>$category_name,'slug'=>$slug);
		
		$insert_values = DB::table('blogs_category')
						->insert($values);
		return redirect()->back();
	}	
	public function all_blogs_show()
	{
		$fetch_all_blogs = DB::table('all_blogs')
						->get();
		return view('admin.all-blogs',compact('fetch_all_blogs'));
	}
	public function add_new_blog_show()
	{
		return view('admin.add-new-blog');
	}
	public function new_blog_insert(Request $request)
	{
		$blog_type = $request->input('blog_type');
		$blog_main_type = $request->input('blog_main_type');
		$blog_title = $request->input('blog_title');
		$blog_date = $request->input('blog_date');
		$author = $request->input('author');
		$description = $request->input('description');
		$video_url = $request->input('video_url');
		if($request->hasFile('upload_image') == ''){
             $upload_image = 'dummy.jpg';
 
        }else{
            $timestamp = time();
            $upload_image = $timestamp.'-'.str_replace(' ','-',$request->upload_image->getClientOriginalName());
            $request->upload_image->move('public/frontend/images/blogs/', $upload_image);
        }
		
		$values = array('blog_title'=>$blog_title,'blog_type'=>$blog_type,'main_type'=>$blog_main_type,'blog_date'=>$blog_date,'author'=>$author,
		'upload_image'=>$upload_image,'description'=>$description,'video_url'=>$video_url);
		
		$insert_values = DB::table('all_blogs')
						->insert($values);
		return redirect()->route('all_blogs_show');
	}
	public function delete_blog($id)
	{
		$blog_id = $id;
		
		$remove_blog = DB::table('all_blogs')
					->where('id','=',$blog_id)
					->limit(1)
					->delete();
		return redirect()->back();
	}
	public function blog_status_active($id)
	{
		$blog_id = $id;
		$status = 1;
		
		$values = array('status'=>$status);
		
		$update_status = DB::table('all_blogs')
						->where('id','=',$blog_id)
						->limit(1)
						->update($values);
		return redirect()->back();
	}
	public function blog_status_inactive($id)
	{
		$blog_id = $id;
		$status = 2;
		
		$values = array('status'=>$status);
		
		$update_status = DB::table('all_blogs')
						->where('id','=',$blog_id)
						->limit(1)
						->update($values);
		return redirect()->back();
	}
	public function view_blog_details_show($id)
	{
		$blog_id = $id;
		
		$fetch_blog_details = DB::table('all_blogs')
							->where('id','=',$blog_id)
							->first();
		return view('admin.view-blog-details',compact('fetch_blog_details'));
	}
	public function view_blog_details_update(Request $request)
	{
		$blog_id = $request->input('blog_id');
		$blog_type = $request->input('blog_type');
		$blog_main_type = $request->input('blog_main_type');
		$blog_title = $request->input('blog_title');
		$blog_date = $request->input('blog_date');
		$author = $request->input('author');
		$description = $request->input('description');
		$video_url = $request->input('video_url');
		if($request->hasFile('upload_image') == ''){
             $upload_image = $request->input('old_upload_image');
 
        }else{
            $timestamp = time();
            $upload_image = $timestamp.'-'.str_replace(' ','-',$request->upload_image->getClientOriginalName());
            $request->upload_image->move('public/frontend/images/blogs/', $upload_image);
        }
		
		$values = array('blog_title'=>$blog_title,'blog_type'=>$blog_type,'main_type'=>$blog_main_type,'blog_date'=>$blog_date,'author'=>$author,
		'upload_image'=>$upload_image,'description'=>$description,'video_url'=>$video_url);
		
		$insert_values = DB::table('all_blogs')
						->where('id','=',$blog_id)
						->limit(1)
						->update($values);
		return redirect()->route('all_blogs_show');
	}
	public function admin_show_change_password()
	{
	    return view('admin.change-password');
	}
	public function admin_update_password(Request $request)
	{
	    $admin_id = $request->input('admin_id');
	    
	    $confirm_password = Hash::make($request->input('new_password'));
	    
	    $values = array('password'=>$confirm_password);
	    $update_password = DB::table('users')
	                    ->where('id','=',$admin_id)
	                    ->limit(1)
	                    ->update($values);
	   return redirect()->back();
	    
	}
}
