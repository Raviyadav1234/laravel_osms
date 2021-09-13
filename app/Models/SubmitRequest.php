<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitRequest extends Model
{
    use HasFactory;

    protected $table = 'tbl_submitrequest';




    public function run(){
    SubmitRequest::factory()
            ->count(10)
            ->hasPosts(10)
            ->create();
    }


}
