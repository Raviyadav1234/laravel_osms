<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    protected $table = 'tbl_technician';
    protected $primaryKey = 'tech_id';
    public $timestamps = false;

    // protected $fillable = [
    //     'tech_name',
    //     'tech_city',
    //     'tech_mobile',
    //     'tech_email',];
}
