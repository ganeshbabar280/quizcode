<?php

namespace App\Http\Controllers\student\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->student()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::student_HOME)
                    : view('student.verify-email');
    }
}
