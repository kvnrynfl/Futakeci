<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductComponent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'product_id',
        'component_id'
    ];

    /**
     * Get the Product that owns the ProductComponent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the Component that owns the ProductComponent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Component(): BelongsTo
    {
        return $this->belongsTo(Component::class, 'foreign_key', 'other_key');
    }
}
