<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
       
       'user_id'  ,
       'message' ,
       'vue_user' ,
       'vue_admin' ,
       'type' ,
     

];
public function user()
{
    return $this->belongsTo(User::class);
}
}
