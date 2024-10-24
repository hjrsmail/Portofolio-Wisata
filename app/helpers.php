<?php

if (!function_exists('linkify')) {
    function linkify($text)
    {
        // Cek apakah teks sudah mengandung tag <a>
        if (preg_match('/<a\s+href=["\'].*?["\'].*?>.*?<\/a>/', $text)) {
            return $text; // Langsung kembalikan teks tanpa mengubah
        }

        // Regex untuk mendeteksi URL dan membuatnya jadi link
        $regex = '/(https?:\/\/[^\s]+)/';
        return preg_replace(
            $regex,
            '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>',
            $text
        );
    }
}
