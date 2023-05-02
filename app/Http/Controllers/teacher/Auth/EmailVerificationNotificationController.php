<?php

namespace App\Http\Controllers\teacher\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->teacher()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::Teacher_HOME);
        }

        $request->teacher()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
