<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,pdf,doc,docx,zip|max:5120',
        ]);

        $file = $request->file('file');
        $nama_file = now()->timestamp . "_" . $file->getClientOriginalName();

        // Simpan file di public/uploads
        $file->move(public_path('uploads'), $nama_file);

        return back()->with('success', 'File berhasil diupload!');
    }

    public function upload_resize(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file');
        $nama_file = now()->timestamp . "_" . $file->getClientOriginalName();

        // Resize hanya jika file adalah gambar
        $resized_image = Image::make($file)->resize(200, 200);
        $resized_image->save(public_path('images/dropzone/' . $nama_file));

        return back()->with('success', 'Gambar berhasil diupload & diresize!');
    }

    public function multipleUpload(Request $request)
    {
        $request->validate([
            'file.*' => 'required|mimes:jpeg,png,jpg,gif,pdf,doc,docx,zip|max:5120',
        ]);

        $uploaded_files = [];

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $nama_file = now()->timestamp . "_" . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $nama_file);
                $uploaded_files[] = $nama_file;
            }
        }

        return response()->json(['success' => 'Files berhasil diupload!', 'files' => $uploaded_files]);
    }

    public function dropzoneIndex()
    {
        return view('dropzone_upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|max:10240', // Maksimal 10MB
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/dropzone'), $nama_file);

            return response()->json(['success' => 'File berhasil diupload!', 'file' => $nama_file]);
        }

        return response()->json(['error' => 'Gagal upload file!'], 400);
    }
}
