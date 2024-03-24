<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Component extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'type',
        'name',
        'brand',
        'description',
        'url',
        'amount',
        'unit',
        'price',
    ];

    /**
     * Get all of the Images for the Component
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Images(): HasMany
    {
        return $this->hasMany(ComponentImage::class);
    }
}
