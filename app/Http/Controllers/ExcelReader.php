<?php 

namespace App\Http\Controllers;

use App\Models\Frutas;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
class ExcelReader implements ToCollection{

    public function collection(Collection $rows){
        foreach($rows as $row ){
            if($row[0] != 'fruta' && $row[1] != 'codigo' && $row[2] != 'precio' && $row[3] != 'cantidad' && $row[4] != 'impuesto' && $row[5] != 'fecha'){
                Frutas::insert([
                    "fruta"=>$row[0],
                    "codigo"=>$row[1],
                    "precio"=>$row[2],
                    "cantidad"=>$row[3],
                    "impuesto"=>$row[4],
                    "fecha"=>$row[5]
                ]);
                }
            }
      }
}