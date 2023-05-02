<?php

namespace App\Http\Controllers\teacher\Auth;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('teacher.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'collage' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.teacher::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('teacher')->login($user);

        return redirect(RouteServiceProvider::Teacher_HOME);
    }
}