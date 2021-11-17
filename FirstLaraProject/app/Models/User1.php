<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;
    protected $table = 'user1';
    protected $primaryKey = 'id';
    protected $fillable = [
                        'name',
                        'password'
                    ];
    public function user1_company()
    {
        return $this->hasMany(User1Model::class);
    }
}