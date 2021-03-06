<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companys';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];
    public $timestamps = false;

    public function companys()
    {
        return $this->hasMany(CompanyModel::class);
    }

}
