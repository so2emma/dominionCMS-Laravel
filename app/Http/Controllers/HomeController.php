<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = User::all();
        return view('admin.home', compact('admins'));
    }
    public function members()
    {
        $members = Member::latest()->filter(request(['member']))->get();
        return view('admin.member', compact('members'));
    }
    public function department()
    {
        $members = Member::filter(request(['department']))->get();
        return view('admin.department', compact('members'));
    }
    public function dob()
    {
        $members = Member::filter(request(['month']))->get();
        return view('admin.birthday', compact('members'));
    }
    public function weddingAnniversary()
    {
        $members = Member::filter(request(['weddingAnniversary']))->get();
        return view('admin.weddingAnniversary', compact('members'));
    }

    public function dateJoined(Request $request)
    {  if ($request->start =="")
        {
            $members = [];
            return view('admin.dateJoined', compact('members'));
        }
        else
        {
            $members= DB::table('members')
               ->whereBetween('created_at', [$request->start.' 00:00:00', $request->end.' 23:59:59'])
            //    ->whereBetween('dateJoined', [$request->start, $request->start])
               ->get();
            // dd($members);
            return view('admin.dateJoined', compact('members'));
        }
    }
    // DISPLAY PROFILE DETAILS
    public function profileDetail($id)
    {
        $profile = Member::findOrFail($id);
        return view('admin.show', compact('profile'));
    }

}
