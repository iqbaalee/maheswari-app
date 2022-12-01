<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'customer', 'wedding_date', 'number_phone', 'location', 'status', 'file_confirm', 'deleted_at', 'created_at'];
}
