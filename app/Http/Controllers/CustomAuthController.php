<?php
namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();

            return view('site.dashboard',compact("user"));
        }
  
        return view('auth.login');

    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        //dd($request);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("site.dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();

            $Count_user = User::all()
            ->where('access_level','=', 'user')
            ->count();

            $list_users = User::all()
            ->where('access_level','=', 'user');

            $Count_leads = Lead::all()
            ->where('user_id','=', $user->id)
            ->count();

            $list_leads = Lead::all()
            ->where('user_id','=', $user->id);
            
            //return view('dashboard',compact("user"));
            return view('site.dashboard',([
                                            "user" => $user
                                            ,"quantidade_user"=>$Count_user
                                            ,"list_user" => $list_users
                                            ,"quantidade_lead" => $Count_leads
                                            ,"list_lead" => $list_leads
                                        ]));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}