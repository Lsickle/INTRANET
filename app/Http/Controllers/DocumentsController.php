<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Documents = DB::table('documents')->get();
       return view('documents.index', compact('Documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Documents::with('areas')->get();
        /*return $areas;*/
        return view('documents.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request;*/
        // se almacena el archivo
        $path = $request->file('DocSrc')->store('public/'.$request->input('DocType'));

        // se extraen los metadotos
        $archivo = $request->file('DocSrc');
        $mime = $archivo->getClientMimeType();
        $nombreorigi = $archivo->getClientOriginalName();
        $tamaño = ceil(($archivo->getClientSize())/1024);

        // se crea el registro del documento en la base de datos
        $document = new Documents();
        $document->DocName = $request->input('DocName');
        $document->DocVersion = $request->input('DocVersion');
        $document->DocType = $request->input('DocType');
        $document->DocPublisher = $request->input('DocPublisher');
        $document->DocGeneral = $request->input('DocGeneral');
        $document->DocSrc = $path;
        $document->DocMime = $mime;
        $document->DocOriginalName = $nombreorigi;
        $document->DocSize = $tamaño;
        $document->users_id = Auth::user()->id;
        $document->save();

        // redireccionamiento al index de documentos
        return redirect()->route('documents.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show(Documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function edit(Documents $document)
    {
        /*return $id;*/
        /*$Documents = Document::where($id)->first();*/
        /*$Documents = DB::table('documents')->get();*/
        /*return $Documents;*/
        return view('documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $document)
    {
        /*return $document;*/
        if ($request->hasFile('DocSrc')) {
            $docActual = $document->DocSrc;
            Storage::disk('local')->delete($docActual);

            // $document->update($request->except('DocSrc'));

            $path = $request->file('DocSrc')->store('public/'.$request->input('DocType'));

            $archivo = $request->file('DocSrc');
            $mime = $archivo->getClientMimeType();
            $nombreorigi = $archivo->getClientOriginalName();
            $tamaño = ceil(($archivo->getClientSize())/1024);

            $document->update([
                'DocName' => $request->input('DocName'), 
                'DocSrc' => $path, 
                'DocVersion' => $request->input('DocVersion'), 
                'DocType' => $request->input('DocType'), 
                'DocMime' => $mime, 
                'DocOriginalName' => $nombreorigi, 
                'DocSize' => $tamaño, 
                'DocGeneral' => $request->input('DocGeneral'), 
                'DocPublisher' => $request->input('DocPublisher'), 
                'users_id' => auth()->user()->id,
            ]);

        }else{
            $document->update($request->except('DocSrc'));
        }
        /*$tratamiento = Tratamiento::find($id);*/
        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $document)
    {
        $docActual = $document->DocSrc;
        Storage::disk('local')->delete($docActual);
        $document->delete();
        return redirect()->route('documents.index');
    }
}
