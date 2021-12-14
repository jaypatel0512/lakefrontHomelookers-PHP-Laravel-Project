<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Faqs;
use App\Models\Property;
use App\Models\Role;
use App\Models\Home;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;

class MainController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    function save(Request $request){
     //   return $request->input();
      //  Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/index');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('homepage');
        }
    }

    function index(){
        $home = Home::all();
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.index', $data);

   // return view('admin.index',compact('data', 'home') );
    }

    function properties(){
        $properties = Property::all();

        return view('admin.properties',compact('properties'));
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }

    function blogs(){
        $blogs = Blog::all();
        return view('admin.blogs', compact('blogs'));
    }

    function roles(){
        $roles = Role::all();

        return view('admin.roles',compact('roles'));
    }



    function aboutUs(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.aboutUs', $data);
    }

    function team(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.team', $data);
    }

    function contactUs(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.contactUs', $data);


    }

    public function contactSubmit(Request $request){
        Mail:: send('emails.contactmail', [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=>$request->msg
        ], function($mail) use ($request){
            $mail-> from(env('MAIL_FROM_ADDRESS'), $request->name);
            $mail->to("neeti.malhotra18@gmail.com")->subject('Contact Us Message');
        });
        return "message sent successfully";
    }

    function faqs(){
        $faqs = Faqs::all();

        return view('admin.faqs',compact('faqs'));
    }

    function propertiesDetail(){
        $properties = Property::all();

        return view('admin.propertiesDetail',compact('properties'));
    }

    function appointments(){
        $appointments = Appointment::all();

        return view('admin.appointment',compact('appointments'));
    }
}
