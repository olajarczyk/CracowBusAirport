<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function Profile(){
        $id = Auth::user() -> id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    } //End Method

    public function EditProfile(){
        $id = Auth::user() -> id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    } //End Method

    public function StoreProfile(Request $request){
        $id = Auth::user() -> id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        
        if($request->file('profile_image')){
            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file ->move(public_path('upload/admin_image'), $filename);
            $data['profile_image']=$filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Profil został zaktualizowany!',
            'alert-type' => 'success');

        return redirect()->route('admin.profile')-> with($notification);
    } //End Method

    public function ChangePassword(){
        return view('admin.admin_change_password');
    } //End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate(
            [
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirmpassword' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::user()->password;

            if(Hash::check($request->oldpassword, $hashedPassword)){
                $users=User::find(Auth::id());
                $users->password = bcrypt($request->newpassword);
                $users->save();

                session()->flash('message', 'Hasło zostało zmienione!');
                return redirect()->back();
            } else {
                session()->flash('message', 'Stare hasło jest nieprawidłowe!');
                return redirect()->back();
            }
    } //End Method

    public function StopsMethod(){
        return view('admin.stops');
    } //end_method

    public function FAQMethod(){
        return view('admin.faq');
    } //end_method
}
