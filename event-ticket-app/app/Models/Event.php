<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{public function sponsors() {
    return $this->belongsToMany(Sponsor::class);
}
    public function partners() {
        return $this->belongsToMany(Partner::class);
    }
    protected $fillable=['title','image', 'description','time','location','session','workshop','activity','presentation','price', 'date','phone'];

    use HasFactory;
}
