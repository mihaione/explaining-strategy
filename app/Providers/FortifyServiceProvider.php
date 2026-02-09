<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register Fortify actions
        Fortify::createUsersUsing(CreateNewUser::class);

        // Map Fortify view routes to our Livewire Volt/Blade pages
        // Login & Register
        Fortify::loginView('livewire.pages.auth.login');
        Fortify::registerView('livewire.pages.auth.register');

        // Password reset (request link + reset form)
        Fortify::requestPasswordResetLinkView('livewire.pages.auth.forgot-password');
        Fortify::resetPasswordView(static function (Request $request) {
            return view('livewire.pages.auth.reset-password', ['request' => $request]);
        });

        // Password confirmation
        Fortify::confirmPasswordView('livewire.pages.auth.confirm-password');

        // Email verification notice
        // Wrap the Volt page within the guest layout explicitly so CSS/JS are included.
        Fortify::verifyEmailView(static function () {
            return view('livewire.components.layouts.guest', [
                // Render inner view and mark as HTML so the layout does not escape it
                'slot' => new HtmlString(view('livewire.pages.auth.verify-email')->render()),
            ]);
        });

        RateLimiter::for('login', static function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        // If you have two-factor auth enabled, you might need this one too.
        RateLimiter::for('two-factor', static function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        /*
        Fortify::viewPrefix('auth.');

        Fortify::authenticateThrough(static function (Request $request) {
            return array_filter([
                Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            ]);
        });

        Fortify::twoFactorChallengeView(static function () {
            return Blade::render('<livewire:pages.auth.two-factor-chalenge />');
        });
        */
    }
}
