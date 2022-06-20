<?php

namespace App\Models;

use App\Scopes\FilterScope;
use App\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    // belongs to Company model
    public function company(){
        return $this->belongsTo(Company::class);
    }

    //local scope
    public function scopeLatestFirst($query){
        return $query->orderBy('id', 'desc');
    }

    //global scope filter
    public static function booted(){

        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new SearchScope);
    }
}
