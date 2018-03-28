<?php

if (!function_exists('title')) {
    function title (string $title) : string {
        $appName = env('APP_NAME');
        return "$title - $appName";
    }
}
