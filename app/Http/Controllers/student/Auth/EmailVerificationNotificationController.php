<?php

namespace App\Http\Controllers\student\Auth;

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
        if ($request->student()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::student_HOME);
        }

        $request->student()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
