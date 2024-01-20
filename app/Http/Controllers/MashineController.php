<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mashine;
use Image;
use Auth;
use File;

class MashineController extends Controller
{
    public function MashineHomePage()
    {
      $user_id = Auth::user()->id;
      $my_mashine_store = Mashine::where('Seller_Id', '=', $user_id)->get();
      return view('UserAccountBladeFiles.MashineZaKilimo.muuzaji-wa-mashine-za-kilimo', compact('my_mashine_store'));
    }


    public function SellMashine(Request $request)
    {
      // dd($request->Group_Name);
      $data = request()->validate([
        'Mashine_Name' => ['required', 'string'],
        'Mashine_Work' => ['required', 'string'],
        'Mashine_Image' => ['required'],
        'Mashine_Price' => ['required', 'string'],
        'Mashine_Description' => ['required', 'string'],
        'Seller_Name' => ['required', 'string'],
        'Seller_Id' => ['required', 'string'],
        'Seller_Image_Path' => ['required', 'string'],
      ]);


      if (isset($data)) {
        $new_mashine = new Mashine();
        $new_mashine->Mashine_Name = $request->Mashine_Name;
        $new_mashine->Mashine_Work = $request->Mashine_Work;
        $new_mashine->Mashine_Price = $request->Mashine_Price;
        $new_mashine->Mashine_Description = $request->Mashine_Description;
        $new_mashine->Seller_Name = $request->Seller_Name;
        $new_mashine->Seller_Id = $request->Seller_Id;
        $new_mashine->Seller_Image_Path = $request->Seller_Image_Path;


        if (request()->hasFile('Mashine_Image')) {

          //Check File Extension
          $mime = request()->file('Mashine_Image')->getMimeType();

          if (strstr($mime, "image/")) {

            $new_mashine_image = request()->file('Mashine_Image');
            $filename = time().'.'.$new_mashine_image->getClientOriginalExtension();
            Image::make($new_mashine_image)->resize(1920, 1280)->save(public_path('/Uploads/MashineImage/'.$filename));
            $new_mashine->Mashine_Image = $filename;

          }

          else {
            return redirect()->back()->with('Message', 'File Format Not Supported');
          }
        }

        $new_mashine->save();



        return redirect()->back()->with('Message', 'Mashine imepostiwa,  Asante!');


      }

    }

    public function DeleteMashine(Mashine $mashine)
    {
        Mashine::where('id', '=', $mashine->id)->delete();
        return redirect()->back()->with('Message', 'Taarifa Kuhusu Mashine Imeondolewa, Asante!');
    }

    public function EditMashine(Mashine $mashine)
    {
        $mashine_to_edit = Mashine::where('id', '=', $mashine->id)->get();
        return view('UserAccountBladeFiles.MashineZaKilimo.edit-mashine', compact('mashine_to_edit'));
    }

    public function EditMashineStore(Request $request, Mashine $mashine)
    {
      //Update Individual
      if (isset($request->Mashine_Name)) {
          Mashine::where('id', '=', $mashine->id)->update(['Mashine_Name' => $request->Mashine_Name]);
      }

      if (isset($request->Mashine_Work)) {
          Mashine::where('id', '=', $mashine->id)->update(['Mashine_Work' => $request->Mashine_Work]);
      }

      if (isset($request->Mashine_Price)) {
          Mashine::where('id', '=', $mashine->id)->update(['Mashine_Price' => $request->Mashine_Price]);
      }

      if (isset($request->Mashine_Description)) {
          Mashine::where('id', '=', $mashine->id)->update(['Mashine_Description' => $request->Mashine_Description]);
      }

      if (isset($request->Mashine_Image)) {

          //Delete the Old IMAGE from Public Folder (Save Space)
          File::delete([public_path('/Uploads/MashineImage/'.$mashine->Mashine_Image),]);

          $mashine_image = request()->file('Mashine_Image');
          $filename = time().'.'.$mashine_image->getClientOriginalExtension();
          Image::make($mashine_image)->resize(600, 300)->save(public_path('/Uploads/MashineImage/'.$filename));
          Mashine::where('id', '=', $mashine->id)->update(['Mashine_Image' => $filename]);


      }

      return redirect('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page')->with('Message', 'Marekebisho Kuhusu Mashine Yamepokelewa, Asante!');


    }
}
