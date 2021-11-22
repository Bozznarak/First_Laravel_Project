<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
        protected $table = 'jobs';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'description'];
        public $timestamps = false;
}
