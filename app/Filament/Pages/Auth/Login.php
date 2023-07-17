<?php

namespace App\Filament\Pages\Auth;

use Filament\Http\Livewire\Auth\Login as BasePage;
use Illuminate\Support\Facades\Hash;

class Login extends BasePage
{
    public function mount(): void
    {
        parent::mount();

        if ('local' === config('app.env')) {
            $this->form->fill([
                'email' => config('app.admin.email'),
                'password' => Hash::make(config('app.admin.password')),
                'remember' => true,
            ]);
        }
    }
}
