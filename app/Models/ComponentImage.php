<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComponentImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'component_id',
        'name'
    ];

    /**
     * Get the Component that owns the ComponentImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Component(): BelongsTo
    {
        return $this->belongsTo(Component::class, 'foreign_key', 'other_key');
    }
}
