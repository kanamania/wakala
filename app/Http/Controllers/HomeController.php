<?php

namespace App\Http\Controllers;

use App\Models\AddressDistrict;
use App\Models\AddressRegion;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $regions = AddressRegion::all();
        $districts = AddressDistrict::all();
        return view('home')->with(compact(['regions', 'districts']));
    }

    public function login(Request $request)
    {

    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'region_id' => 'required',
            'district_id' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'agent_name' => 'required',
            'agent_number' => 'required',
            'super_agent' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $status = ['type' => 'error', 'text' => 'Registration failed. Please try again'];
        if($user->fill($request->post())->save()){
            $status = ['type' => 'success', 'text' => 'You have successfully registered'];
        }
        return redirect()->back()->with(compact(['status']));
    }
}
