<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $table = 'tbl_assets';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

}
