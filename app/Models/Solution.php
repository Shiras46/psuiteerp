<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Solution extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'features' => 'array',
        'benefits' => 'array',
        'faq' => 'array',
        'statistics' => 'array',
        'challenges' => 'array',
        'how_it_works' => 'array',
        'gallery' => 'array',
        'industries' => 'array',
        'demo_cta' => 'array',
        'contact_cta' => 'array',
    ];

    protected static function booted()
    {
        static::deleting(function ($model) {
            $files = collect([$model->image_path, $model->seo_og_image])->filter();
            if (is_array($model->gallery)) {
                $files = $files->merge($model->gallery);
            }
            foreach ($files as $file) {
                Storage::disk('public')->delete($file);
            }
        });

        static::updating(function ($model) {
            $attributes = ['image_path', 'seo_og_image'];
            foreach ($attributes as $attribute) {
                if ($model->isDirty($attribute) && $model->getOriginal($attribute)) {
                    Storage::disk('public')->delete($model->getOriginal($attribute));
                }
            }

            if ($model->isDirty('gallery')) {
                $oldGallery = $model->getOriginal('gallery') ?? [];
                $newGallery = $model->gallery ?? [];
                $deletedFiles = array_diff($oldGallery, $newGallery);
                foreach ($deletedFiles as $file) {
                    Storage::disk('public')->delete($file);
                }
            }
        });
    }
}
