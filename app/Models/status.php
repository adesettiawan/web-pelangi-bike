<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class status extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'slug',
        'name',
        'description',
    ];

    public $timestamps = true;

    public function product_sts()
    {
        return $this->hasOne(product::class, 'status_id', 'id');
    }
}
