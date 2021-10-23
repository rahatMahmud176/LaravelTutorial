<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleRowInsert extends Model
{
    use HasFactory;
    protected $fillable = ['modelName','supplierName','qty'];


public static function multipleRowInfoSubmit($request)
{
    foreach ($request->modelName as $key => $modelName) {
        $row = new MultipleRowInsert();
        $row->modelName            = $modelName;
        $row->supplierName         = $request->supplierName[$key];
        $row->qty                  = $request->qty[$key];
        $row->save();
}
}




}//MOdel
