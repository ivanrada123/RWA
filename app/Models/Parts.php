<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price','quantity','model_id'];
    
    public function model()
    {
        return $this->belongsTo(Models::class);
    }
}
