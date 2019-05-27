<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function uploadImage(Request $request)
    {
        return $request->all();
        
        request()->validate([
            'file' => 'required',
        ]);
        
        foreach ($request->file('uploadFile') as $key => $value) {
            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('images'), $imageName);
        }

        return response()->json(['success'=>'Images Uploaded Successfully.']);
    }

    public function store(Request $request){

        return response()->json([
            'status' => true,
            'data' => $request->file('image'),
        ], 200);

        if($request->hasFile('image')){
            $request->file('image');
            return $request->image->storeAs('');
        }else{
            return 'No has seleccionado un archivo.';
        }
    }

    public function anotherTry(){
        $image = Input::all();

        $file = (new File())->fromPost($image['actorimage']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" >'
        ];
    }
}
