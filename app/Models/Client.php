<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function booted()
    {
        static::deleting(function ($model) {
            if ($model->logo_path) {
                Storage::disk('public')->delete($model->logo_path);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('logo_path') && $model->getOriginal('logo_path')) {
                Storage::disk('public')->delete($model->getOriginal('logo_path'));
            }
        });
    }
}
