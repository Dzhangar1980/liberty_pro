<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Response;
use Illuminate\Http\Request;
 
class Fileuploader extends Controller {
 
	public function upload(Request $request){
            if ($request->hasFile('files')){
                return Response::json(['msg'=> 'ok']);
            }
            //$file = $request->file('uploadfiles');
       
        //$filename = md5(date("YmdHis").rand(5,50));
//получаем расширение файла
        //$extension = $file->getClientOriginalExtension();
        //$extension = "jpg";
//сохраняем файл в хранилище
        //Storage::disk('uploaded')->put($filename.'.'.$extension,  File::get($file));
//формируем ссылку для ответа
        //$http_path = '/images/uploaded/'.$filename.".".$extension;

        //return Response::json([$file]);
        //return Response::json(['msg'=> $http_path]);
    }
}