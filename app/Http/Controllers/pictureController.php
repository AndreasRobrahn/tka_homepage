<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Image;

class pictureController extends Controller
{
    public function uploadImage(Request $request)
    {
      $request->validate([
        'image' => 'required'
      ]);

      // dd($request);
      if($file = request()->file('image'))
       {
        $image = new Image;

        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('Gallerys/'), $filename);

        $image->url = $filename;

        if($request->title)
        {
          // return 'title';
          $image->is_thumb = 1;
          $image->thumb = 0;
          $image->title = $request->title;
          $image->link = $request->link;
          $image->description = $request->description;
        }
        else {
          // return 'sub';
          // dd($request);
          $image->is_thumb = 0;

          $thumb = DB::table('image')->where('id',$request->thumbid)->value('id');
          $image->thumb = $thumb;
        }
         $image->save();

         return redirect()->back();
       }
    }
    public function changeFrontPicture($newthumb,$oldthumb)
    {
      $oldImg= Image::find($oldthumb);

      DB::table('image')->where('id',$newthumb)->update([
        'is_thumb' => 1,
        'thumb' => 0,
        'title' => $oldImg->title

      ]);
      $oldImg->is_thumb = 0;
      $oldImg->title = $oldImg->title;
      $oldImg->thumb = $newthumb;
      $oldImg->save();

      return redirect()->back();
    }

    public function deleteGallery($id)
    {
      $imagesToDelete = Image::where('id',$id)->orWhere('thumb',$id)->get();

      foreach ($imagesToDelete as $key => $image) {
        $filename = public_path('Gallerys/').$image->url;

        File::delete($filename);
        $image->delete();
      }
      // dd($imagesToDelete);
      return redirect()->back();
    }
    public function deletePic($id)
    {
      $img= Image::find($id);
      //delete the file in the folder
      $filename = public_path('Gallerys/').$img->url;
      File::delete($filename);
      $img->delete();
    }
}
