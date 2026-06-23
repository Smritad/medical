<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InnerPageController extends Controller
{
    public function frontend_thank_you_show()
    {
        return view('thank-you');
    }
	public function frontend_all_blogs_show()
	{
		return view('blogs');
	}
    public function view_blog_details($slug_url)
	{
		//$blog_id = $id;
		
		$blog_slug = $slug_url;
		
		$fetch_blog_details = DB::table('all_blogs')
							->where('slug_url','=',$blog_slug)
							->first();
		// Guard: unknown/renamed slug -> proper 404 (handled as redirect) instead of
		// a 500 from the view reading properties on a null object.
		if (!$fetch_blog_details) {
			abort(404);
		}
		return view('view-blog-details',compact('fetch_blog_details'));
	}
	public function submit_blog_reviews(Request $request)
	{
		$blog_id = $request->input('blog_id');
		$full_name = $request->input('full_name');
		$email_id = $request->input('email_id');
		$user_comment = $request->input('user_comment');
		
		$values = array('blog_id'=>$blog_id,'full_name'=>$full_name,'email_id'=>$email_id,'user_comment'=>$user_comment);
		
		$insert_reviews = DB::table('blog_reviews')
						->insert($values);
		return redirect()->back();
	}
	public function get_in_touch_submit(Request $request)
	{
		$full_name = $request->input('full_name');
		$email_id = $request->input('email_id');
		$contact_number = $request->input('contact_number');
		$your_message = $request->input('your_message');
		
		$values = array('full_name'=>$full_name,'email_id'=>$email_id,'contact_number'=>$contact_number,'your_message'=>$your_message);
		
		$insert_values = DB::table('get_in_touch_submission')
						->insert($values);
		return redirect()->back();
	}
	public function frontend_cost_show()
	{
		return view('cost');
	}
	
	
		public function test()
	{
		return view('test');
	}
	public function frontend_reviews_show()
	{
		return view('reviews');
	}
	public function frontend_watch_and_learn_show()
	{
		return view('watch-and-learn');
	}
	public function frontend_about_us_show()
	{
		return view('about-us');
	}
	public function frontend_faqs_show()
	{
		return view('faqs');
	}
	public function frontend_contact_us_show()
	{
		return view('contact-us');
	}
	public function medical_appraisal_and_revalidation()
	{
		return view('medical-appraisal-revalidation');
	}
	
	public function designated_body()
	{
		return view('designated-body-connection');
	}
	
	
		public function appraisal_advisory_call()
	{
		return view('appraisal-advisory-call');
	}
		
		
	public function observership_clinical_attachment_programme()
	{
		return view('observership-clinical-attachment-programme');
	}
	
	
	public function responsible_officer_services()
	{
		return view('responsible-officer-services');
	}
	public function assurance_for_designated_bodies()
	{
		return view('assurance-designated-bodies');
	}
	public function medico_legal_support()
	{
		return view('medico-legal-support');
	}
	public function career_coaching()
	{
		return view('career-coaching');
	}
	public function privacy_show()
	{
		return view('privacy-policy');
	}
	public function terms_show()
	{
		return view('terms');
	}
}
