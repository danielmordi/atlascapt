<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        $site = Site::find(1);
        return view('admin.settings.site')->with('site', $site);
    }

    public function updateSettings(Request $request)
    {
      // dd($request->get('homepage_content_1'));

      Site::updateOrCreate([
        'id' => 1
      ], [
        'banner_heading' => $request->get('banner1'),
        'banner_sub_heading' => $request->get('banner2'),
        'about_heading' => $request->get('about1'),
        'about_content' => $request->get('about2'),
        'contact_address' => $request->get('address'),
        'contact_phonenumber' => $request->get('number'),
        'contact_email' => $request->get('email'),
        'our_service_heading_one' => $request->get('our_serv_t1'),
        'our_service_body_one' => $request->get('our_serv_b1'),
        'our_service_heading_two' => $request->get('our_serv_t2'),
        'our_service_body_two' => $request->get('our_serv_b2'),
        'our_service_heading_three' => $request->get('our_serv_t3'),
        'our_service_body_three' => $request->get('our_serv_b3'),
        'our_service_heading_four' => $request->get('our_serv_t4'),
        'our_service_body_four' => $request->get('our_serv_b4'),
        'our_service_heading_five' => $request->get('our_serv_t5'),
        'our_service_body_five' => $request->get('our_serv_b5'),
        'our_service_heading_six' => $request->get('our_serv_t6'),
        'our_service_body_six' => $request->get('our_serv_b6')
      ]);

      return response()->json([
        'success' => 'Settings was updated successfully!',
      ]);
    }

    public function profile()
    {
      $user = Auth::user();
      return view('admin.settings.profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
      $profile = User::find($id);

      $profile->username = $request->username;
      $profile->email = $request->email;
      $profile->save();

      return redirect()->back()->with([
        'success' => 'Your profile was updated successfully!'
      ]);
    }

}
