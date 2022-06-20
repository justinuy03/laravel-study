<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Company extends Model
{
    use HasFactory;
    // protected $table = "my_table";
    //protected $guarded = [];
    protected $fillable = ['name', 'address', 'website', 'email'];

    // has many contacts
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}
