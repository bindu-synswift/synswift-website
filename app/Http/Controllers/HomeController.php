<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;
use Mail;
use App\Models\CareerJob;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::where(['status'=>1])->get();
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function application(){
        $projects = Project::where(['status'=>1,'type'=>2])->get();
        return view('application',['projects'=>$projects]);
    }
    public function career(){
        $careerJobs = CareerJob::where(['status'=>1])->get();
        return view('career',['careerJobs'=>$careerJobs]);
    }
    public function comingsoon(){
        return view('comingsoon');
    }

    public function contact(){
        return view('contact');
    }

    public function fag(){
        return view('faq');
    }

    public function webDevelopment(){
        $projects = Project::where(['status'=>1,'type'=>1])->get();
        return view('webdevelopment',['projects'=>$projects]);
    }

    public function uiUxPage(){
        return view('uiux');
    }

    public function whyUS(){
        return view('whyUs');
    }
    public function sendContact(Request $request){
        if(!empty($request)){
            $contact = new Contact;
            $contact ->subject = 'contact form';
            $contact->name = $request->name;
            $contact->email = $request->email;
            //$contact->inquery = $request->inquery;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->website = $request->website;

            $contact->save();
            $data = array('name'=>"Virat Gandhi");
    
        /*Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('thakurbindu07@gmail.com', 'Tutorials Point')->subject
                ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });*/
            return redirect()->back();
        }
    }

    public function singleProject($id){
        $project = Project::where(['id'=>$id])->first();
        return view('single',['project'=>$project]);
    }
}
