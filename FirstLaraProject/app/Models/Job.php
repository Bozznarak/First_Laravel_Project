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

        // $table->unsignedInteger('id_company');
        // $table->foreign('id_company')->references('id')->on('company')->onDelete('cascade');

        // $table->unsignedInteger('id_user');
        // $table->foreign('id_user')->references('id')->on('user1')->onDelete('cascade');

        public function companymodel()
        {
            return $this->belongsTo(CompanyModel::class);
        }
        public function usermodel()
        {
            return $this->belongsTo(UserModel::class);
        }
}
