<?php

namespace App\Models;
use App\Models\Empresa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable =['folio','f_inicio','f_fin','estado','modalidad','prom_desc','observacion'];

     /**
         * Get all of the Sucursal for the Empresa
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function Empresa()
        {
            return $this->belongsto(Empresa::class);
        }  
    
}
