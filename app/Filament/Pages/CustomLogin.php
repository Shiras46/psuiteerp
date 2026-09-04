<?php

namespace App\Filament\Pages;

use Filament\Http\Livewire\Auth\Login as FilamentLogin;
use Illuminate\Contracts\View\View;

class CustomLogin extends FilamentLogin
{
    public function render(): View
    {
        return view('filament.pages.custom-login')
            ->layout('filament::components.layouts.base', [
                'title' => __('filament::login.title'),
            ]);
    }
}
