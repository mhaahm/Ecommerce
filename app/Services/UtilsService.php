<?php
/**
 * Created by PhpStorm.
 * User: mha
 * Date: 22/04/19
 * Time: 22:28
 */

namespace App\Services;
use App\Models\Imports;
use Illuminate\Support\Str;


class UtilsService
{
    public function __construct()
    {
    }

    /**
     * createImportFolder : create folder for import
     * @param $id
     * @return string
     */
    public function createImportFolder($id):string
    {
        // get import by id
        $import = Imports::find($id);
        $importTitle = Str::slug($import->import_title);
        $folder = public_path('upload')."/".$importTitle."/";
        if(!is_dir($folder)) {
            mkdir($folder);
        }
        return $folder;
    }
}