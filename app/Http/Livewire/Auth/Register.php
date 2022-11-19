<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $companyName = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    public function register()
    {

        $this->validate([
            'name' => ['required', 'string', 'min:30'],
            'companyName' => ['required', 'string', 'unique:tenants,name', 'min:30'],
            'email' => ['required', 'email', 'unique:users', 'min:30'],
            'password' => ['required', 'min:8', 'min:30'],
        ]);

        $tenant = Tenant::create([
            'name' => $this->companyName,
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'role' => 'admin',
            'password' => Hash::make($this->password),
            'tenant_id' => $tenant->id,
        ]);

        Auth::login($user);

        redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function updated($value)
    {
        $this->resetErrorBag($value);
    }
}
