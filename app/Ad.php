<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Ad extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    protected $fillable=['title', 'text', 'category_id', 'user_id','created_at'];
}