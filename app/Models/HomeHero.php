<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeHero extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function booted()
    {
        static::deleting(function ($model) {
            if ($model->image_path) {
                Storage::disk('public')->delete($model->image_path);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('image_path') && $model->getOriginal('image_path')) {
                Storage::disk('public')->delete($model->getOriginal('image_path'));
            }
        });
    }
}
