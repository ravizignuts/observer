<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class FilestorageController extends Controller
{
    public function index()
    {
        $files = Storage::files(URL::asset('public/uploads'));
        return view('upload',['files' => $files]);
        // dd($files);
    }
    public function upload(Request $request)
    {
        $filename = time() . '-ravi.' . $request->file('profile')->getClientOriginalExtension();
        $request->file('profile')->storeAs('public/uploads', $filename);
        return view('upload',['filename' => $filename]);
    }
    public function delete($path)
    {
        // dd($path);
        Storage::delete(URL::asset('public/uploads/'.$path));
        return redirect('index');
    }

}
