<?php

namespace App\Http\Controllers;

use App\Models\Frutas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FrutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frutas');
    }

    public function importar(Request $request){
        try {
            Excel::import(new ExcelReader ,$request->documento);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
             
             foreach ($failures as $failure) {
                 $failure->row(); // row that went wrong
                 $failure->attribute(); // either heading key (if using heading row concern) or column index
                 $failure->errors(); // Actual error messages from Laravel validator
                 $failure->values(); // The values of the row that has failed.
             }
        }
        
        
        return redirect('/frutas')->with('success', 'Se ha cargado el excel correctamente');
    }
}
