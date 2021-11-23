<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\User;
use App\Models\Staff;
use App\Models\Item;
use Auth;
use Image;

class AdminController extends Controller
{


    //Admin login Page
    Public function admin_login_redirect()
    {
      return redirect('/kilimofy/Staff/login');
    }



    //Admin register new staff blade Page
    Public function admin_register_new_staff()
    {
      return view('AdminBladeFiles.admin-register-new-staff-form');
    }

    //Admin register new staff store method
    Public function admin_register_new_staff_store(Request $request)
    {
      // dd($request->Staff_Name, $request->Staff_Role, $request->Email, $request->Password);


      $data = request()->validate([
        'Staff_Name' => ['required', 'string', 'max:255'],
        'Staff_Role' => ['required', 'string', 'max:255'],
        'Email' => ['required', 'string', 'email', 'max:255', 'unique:staff'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);

      if (isset($data)) {
           // dd('Hellow');
           Staff::create([
           'Staff_Name' => $data['Staff_Name'],
           'Staff_Role' => $data['Staff_Role'],
           'Email' => $data['Email'],
           'Password' => Hash::make($data['password']),
         ]);
      }

      return redirect()->back()->with('Message', 'New Staff Added Succesfuly !');
    }


    public function staff_login(Request $request)
    {
      $this->validate($request, [
          'Email' => 'required|string',
          'password' => 'required',
          ]);

          if (Auth::attempt([
              'Email' => $request->Email,
              'password' => $request->password,

            ])
          )
          {
            dd(" \'am In");
          }
    }



    //Admin Index Page
    Public function admin_index_page()
    {
      return view('AdminBladeFiles.admin-index');
    }

    //Users list
    Public function users_list()
    {
      $user_list = User::all();
      // dd($user_list);
      return view('AdminBladeFiles.users-list', compact('user_list'));
    }

    //Users list
    Public function users_action_list()
    {
      $user_list = User::all();
      // dd($user_list);
      return view('AdminBladeFiles.users-action-list', compact('user_list'));
    }


    public function forum_category_form()
    {
      return view('AdminBladeFiles.New-Forum-Category-Form');
    }


    public function create_forum_category(Request $request)
    {
       $data = request()->validate([
         'Category' => ['required','string'],
         'Category_Description' => ['required','string'],
         'Category_Image' => ['required'],
       ]);

       if (isset($data)) {

         $forum_category = new Forum();
         $forum_category->Category = $request->Category;
         $forum_category->Category_Description = $request->Category_Description;
         $mime = $request->file('Category_Image')->getMimeType();

         if(strstr($mime, "image/")){
           $forum_category_image = $request->file('Category_Image');
           $filename = time().'.'.$forum_category_image->getClientOriginalExtension();
           Image::make($forum_category_image)->resize(64, 64)->save(public_path('/Uploads/ForumCategoryImage/'.$filename));
           $forum_category->Category_Image = $filename;
         }

         $forum_category->save();

       }

       return redirect()->back()->with('Message', 'Forum Category was Created Succesfuly !');
    }









    Public function items_waiting_list()
    {
      $items = Item::all();
      return view('AdminBladeFiles.item-waiting-list', compact('items'));
    }


    Public function items_details(Item $item_id)
    {

      $item_details = Item::where('id', '=', $item_id->id)->get();

      return view('AdminBladeFiles.item-details', compact('item_details'));
    }


    Public function admin_all_forms()
    {

      return view('AdminBladeFiles.admin-all-forms');
    }

    Public function items_feedback_form(Item $item_id)
    {
      $feedback_id = $item_id->id;
      // dd($id);
      return view('AdminBladeFiles.item-feedback', compact('feedback_id'));
    }

    Public function items_feedback_update(Request $request)
    {

      Item::where('id', '=', $request->feedback_id)->update(['feedback' => $request->feedback]);
      $items = Item::all();
      return redirect('/kilimofy/Admin/items-waiting-list');
    }

    Public function accept_item_to_market(Item $item_id)
    {


      Item::where('id', '=', $item_id->id)->update(['status' => 'Accepted'], ['feedback' => null]);

      return redirect('/kilimofy/Admin/items-waiting-list');
    }
}
