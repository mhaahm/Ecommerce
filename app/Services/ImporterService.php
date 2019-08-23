<?php
namespace App\Services;
use Illuminate\Support\Collection;

class ImporterService
{
    public function __construct()
    {
    }

    /**
     * @param $file
     */
    public function createFileLoader($file)
    {
        $info = pathinfo($file);
        $extension = $info['extension'];
        switch ($extension)
        {
            case 'xls':
            case 'xlsx':

                break;
            case 'csv':
                $data = $this->csvData($file);
                break;
            default:

        }
        return $info;
    }

    /**
     * @param $file
     * @return Collection
     */
    private function csvData($file):Collection
    {
        $collect = collect([]);
        $fileDataHandler = fopen($file,'r+');
        while ($row = fgetcsv($fileDataHandler))
        {
            $collect->add($row);
        }
        return $collect;
    }
}

?>