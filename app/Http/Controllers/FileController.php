<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * @param $image
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function viewImage(Request $request){
        $name=$request->img;
        $image=File::where('name','=',$name)->first();
       if($image){
           $path=$image['path'];
           $route = env('APP_LOCATION').'/storage/app/'.$path; // depende de root en el archivo filesystems.php.
           if (\Storage::exists($path))
           {
               header("Content-type: image/jpeg");
               header("Content-length: " . filesize($route));
               header("Content-Disposition: inline; filename=".$image['name']);
               readfile($route);
           }else{
               return "Error";
           }
       }else{
           return 'Error';
       }

 }
}
