<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SampleController;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;
use Illuminate\Support\Facades\Auth;
class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();

        return view('index', [
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {

        $fileName = time() . '.' . $request->file->extension();
        $size = $request->file->getSize();
        $request->file->move(public_path('file'), $fileName);
        $data = $request->all();

        File::create([
            'user_id' => auth()->id(),
            'name' => $fileName,
            'type' => $data['type'],
            'size' => $size,
            'niveau' => $data['niveau'],
        ]);

        return redirect()->route('index')->withSuccess(__('File added successfully.'));
    }

    public function view($id)
    {
        $file = file::find($id);
        return view('view', compact('file'));
    }
}
