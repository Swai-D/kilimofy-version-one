<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SearchController extends Controller
{

  public function search(Request $request)

    {
    if($request->ajax())

      {
          $output="";
          $posts = DB::table('posts')->where('Caption','like','%'.$request->search."%")
                                    ->orWhere('name','like','%'.$request->search."%")
                                    ->orWhere('username','like','%'.$request->search."%") ->get();

          if($posts)

          {
              foreach ($posts as $key => $post) {

              $output.='<tr>'.
              '<td>'.$posts->id.'</td>'.
              '<td>'.$posts->Caption.'</td>'.
              '<td>'.$posts->name.'</td>'.
              '<td>'.$posts->username.'</td>'.
              '</tr>';
              }


              return Response($output);
           }
       }
    }

}
