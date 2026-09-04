<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyebrow',
        'title',
        'description',
        'primary_button_text',
        'primary_button_link',
        'secondary_button_text',
        'secondary_button_link',
        'image',
        'metrics',
        'features',
        'order',
        'is_active',
    ];

    protected $casts = [
        'metrics' => 'array',
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::deleting(function ($model) {
            if ($model->image) {
                Storage::disk('public')->delete($model->image);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('image') && $model->getOriginal('image')) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }
}
