<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
'category_id',
'user_id',
'date',
'amount',
'description',
    ];
    protected $dates = ['date'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function setAmountAttribute($value){
        $this->attributes['amount'] = $value * 100 ; 
    }
/*        public function setDateAttribute($value){
        $this->attributes['date'] = Carbon::createFormFormat('m/d/y',$value)->format('y-m-d'); 
    }*/
}
