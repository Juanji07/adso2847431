<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description',
    ];

    public function adoption() {
        return $this->hasOne(Adoption::class);
    }

    public function scopeNames($pets, $q) {
        if(trim($q)) {
            $pets->where('name', 'LIKE', "%$q%")
                ->orWhere('kind', 'LIKE', "%$q%");
        }
    }
}
