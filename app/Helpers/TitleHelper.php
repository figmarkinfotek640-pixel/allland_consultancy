<?php

namespace App\Helpers;

class TitleHelper
{
    /**
     * Format a title into a two-tone headline where the primary part is white
     * and the accent part is wrapped in <span> (styled orange in .subpage-title span).
     */
    public static function twoTone(string $title): string
    {
        $title = trim($title);

        // If title already has span tags, leave as-is
        if (str_contains($title, '<span')) {
            return $title;
        }

        // 1. Natural split on ' — ' (em dash) or ' - ' or ': '
        foreach ([' — ', ' - ', ': '] as $separator) {
            if (str_contains($title, $separator)) {
                $parts = explode($separator, $title, 2);
                return e($parts[0]) . $separator . '<span>' . e($parts[1]) . '</span>';
            }
        }

        // 2. Trailing parentheses e.g. "Title (Subtitle)"
        if (preg_match('/^(.*?)\s*(\([^\)]+\))$/u', $title, $matches)) {
            return e($matches[1]) . ' <span>' . e($matches[2]) . '</span>';
        }

        // 3. Natural split on ' & ' if it separates phrases nicely
        if (substr_count($title, ' & ') === 1) {
            $parts = explode(' & ', $title, 2);
            $secondWords = preg_split('/\s+/u', trim($parts[1]));
            if (count($secondWords) <= 2) {
                return e($parts[0]) . ' &amp; <span>' . e($parts[1]) . '</span>';
            }
        }

        // 4. Word-based fallback:
        $words = preg_split('/\s+/u', $title);
        $totalWords = count($words);

        if ($totalWords <= 1) {
            return '<span>' . e($title) . '</span>';
        }

        // If 4 or more words, highlight the last 2 words; otherwise highlight the last word
        $highlightCount = ($totalWords >= 4) ? 2 : 1;
        $mainParts = array_slice($words, 0, -$highlightCount);
        $accentParts = array_slice($words, -$highlightCount);

        return e(implode(' ', $mainParts)) . ' <span>' . e(implode(' ', $accentParts)) . '</span>';
    }
}
