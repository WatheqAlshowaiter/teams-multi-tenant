<?php

namespace App\Http\Controllers;

use App\Models\Scopes\TenantScope;
use App\Models\User;

class ImpersonationController extends Controller
{
    public function leave()
    {
        if (! session()->has('impersonate')) {
            abort(403);
        }

        // below can't work because TenantScope will apply and super user has null on tenant_id
        // auth()->loginUsingId(session('impersonate'));
        auth()->login(User::withoutGlobalScope(TenantScope::class)->find(session('impersonate')));
        session()->forget('impersonate');

        return redirect('/');
    }
}
