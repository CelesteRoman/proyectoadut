<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicion extends Model
{
    use HasFactory;

    protected  $table = 'tbl_edicion';

    protected $primaryKey = 'id_edicion';

}
