<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SectionsController extends Controller
{
    public function uploadSliderImages(Request $request)
    {
        $files = $request->allFiles();
        foreach ($files as $file) {
            $file_name = $file->getClientOriginalName();
            $path = $file->storeAs("slides", $file_name);
        }
    }

    public function liveEdit($section_id)
    {
        $content = '<p>
This is a dummy content we will be getting the content from the database and
we will be able to edit that content through live editor </p>';
        return Inertia::render('LiveEditor', ['content' => $content]);
    }

}
