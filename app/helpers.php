<?php

if (! function_exists('hasSessions')) {
    function hasSessions(array $sessions) {
        foreach ($sessions as $session) {
        	if (session($session)) return true;
        }
    }
}

if (! function_exists('user')) {
    function user() {
        return auth()->user() ? auth()->user() : (new App\User);
    }
}

if (! function_exists('logout')) {
    function logoutUser() {
        $user = user();
        $user->visited_at = null;
        $user->save();

        auth()->logout();

        request()->session()->invalidate();
    }
}

if (! function_exists('updateVisitedAt')) {
    function updateVisitedAt() {
        $user = user();
        $user->visited_at = now();
        $user->save();
    }
}

if (! function_exists('isAuthenticated')) {
    function isAuthenticated() {
        return auth()->check();
    }
}