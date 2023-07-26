<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function uploadSliderImages(Request $request){
        $files = $request->allFiles();
        foreach ($files as $file){
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs("slides", $file_name);
        }
    }
}
