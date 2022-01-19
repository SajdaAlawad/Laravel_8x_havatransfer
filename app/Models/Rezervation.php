<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\LoopContextPass;

class Rezervation extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo( User::class);
    }
    public function from_location_id()
    {
        return $this->belongsTo( Location::class);
    }
    public function to_location_id()
    {
        return $this->belongsTo( Location::class);
    }
}
