<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserSocialMedia;
use App\Models\Instructor;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File;
use Auth;
class UserContrller extends Controller
{
    public function index(){
        return view('backend.pages.index');
    }
    public function userDetails(){
        return view('backend.pages.user.account-details');
    }
    public function accountSetting(){
        return view('backend.pages.user.account-setting');
    }
    public function modeUser(){
        $user = User::findOrFail(Auth::user()->id)->update([
            'user_role_id' => 2,
        ]);
        return redirect()->route('user.dashboard');
    }

    public function changePassword(){
        return view('fontend.pages.user.change-pass');
    }

    public function updatePassword(Request $request){
        $save_image = Auth::user()->profile_photo_path;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = time() . '.' . $image->extension();
            Image::make($image)->resize(100, 100)->save('uploads/user/thambnail/'.$name_gen);
            $save_image = 'uploads/user/thambnail/'.$name_gen;
        }
        $user = User::findOrFail(Auth::user()->id)->update([
            'name'                      => $request->name,
            'profile_photo_path'        => $save_image,
            'description'               => $request->description,
            'phone'                     => $request->phone,
            'gender'                    => $request->gender,
            
        ]);
        return redirect()->back();
    }

    public function updateAccDetailAjax(Request $request){
        $save_image = Auth::user()->profile_photo_path;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = time() . '.' . $image->extension();
            Image::make($image)->resize(100, 100)->save('uploads/user/thambnail/'.$name_gen);
            $save_image = 'uploads/user/thambnail/'.$name_gen;
        }
        $data = User::findOrFail(Auth::user()->id)->update([
            'name'                              => $request->name,
            'birth_date'                        => $request->birth_date,
            'birth_month'                       => $request->birth_month,
            'birth_year'                        => $request->birth_year,
            'profession'                        => $request->profession,
            'profile_photo_path'                => $save_image,
            'gender'                            => $request->gender,
            'updated_at'                        => Carbon::now(),
        ]);

        return response()->json([
            'message' => 'bio  update successfully',
            'success' => true, 
        ], 201);
    }
    public function updateBioAjax(Request $request){
        $data = User::findOrFail(Auth::user()->id)->update([
            'description' => $request->aboutBio,
            'updated_at'  => Carbon::now(),
        ]);
        return response()->json([
            'message' => 'bio  update successfully',
            'success' => true, 
        ], 201);
    }

    public function updateContactAjax(Request $request){
        $user = UserContact::where('user_id',Auth::User()->id)->first();
       
        
        $data = UserContact::findOrFail($user->id)->update([
            'country'           => $request->country,
            'address'           => $request->address,
            'location'          => $request->location,
            'phone'             => $request->phone,
            'web_site'          => $request->web_site,
            'updated_at'        => Carbon::now(),
        ]);
        return response()->json($data);
    }
    public function updateSocialAjax(Request $request){
        $user = UserSocialMedia::where('user_id',Auth::User()->id)->first();
        $data = UserSocialMedia::findOrFail($user->id)->update([
            'facebook'              => $request->facebook,
            'linkenin'              => $request->linkenin,
            'twitter'               => $request->twitter,
            'github'                => $request->github,
            'updated_at'            => Carbon::now(),
        ]);
        return response()->json($data);
    }

}
