<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_company extends Model
{
    use HasFactory;

    protected $table = "user_company";
    public function company()
    {
        return $this->belongsTo(CompanyModel::class);
    }
    public function user1()
    {
        return $this->belongsTo(User1Model::class);
    }

}
