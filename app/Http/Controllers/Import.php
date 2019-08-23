<?php

namespace App\Http\Controllers;

use App\Services\ImporterService;
use App\Services\UtilsService;
use Illuminate\Http\Request;
use  App\Models\Imports;
use Validator;

/**
 * Class Import
 * @package App\Http\Controllers
 */

class Import extends Controller
{
    private $utils;
    private $importer;

    public function __construct(UtilsService $service,ImporterService $importer)
    {
        $this->utils = $service;
        $this->importer = $importer;
    }

    public function NewImport()
    {
        return view("Data.import");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function SaveImport(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'import_title'=>'required|Unique:imports|max:255',
            'import_description'=>'required'
        ]);

        if($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                'message' => $errors,
                'result'=>false
            ]);
        }
        $import = Imports::create([
            'import_title'=>request('import_title'),
            'description'=>request('import_description')
        ]);

        return response()->json([
            'message'=>['Data saved successfuly'],
            'result'=>true,
            'importId' => $import->id
        ]);
    }


    public function UploadFile(Request $request)
    {
        if($request->hasFile("file_data1")) {
            $file = $request->file('file_data1')[0];
            $importId = $request->get('importId');
            $folder_path = $this->utils->createImportFolder($importId);
            $fileName = $file->getClientOriginalName();
            $file->move($folder_path, $fileName);
            // import data
            // comment faire les imports des données
            $fileInfo = $this->importer->createFileLoader($folder_path.'/'.$fileName);
            dd($fileInfo);
            return response()->json(['message' =>$fileName]);
        } else {
            return response()->json(['message' => 'no file']);
        }


    }
}
