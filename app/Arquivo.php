<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table='tb_arquivos';
    protected $primaryKey='cod_arquivo';
    protected $fillable=array('nome','link');
}
