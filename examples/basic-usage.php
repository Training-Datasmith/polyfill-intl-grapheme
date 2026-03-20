<?php

declare(strict_types=1);

/**
 * Example: Grapheme-cluster-aware string operations with polyfill-intl-grapheme.
 *
 * Install:
 *   composer require symfony/polyfill-intl-grapheme
 *
 * The grapheme_* functions operate on Unicode grapheme clusters, not bytes or code points.
 * A grapheme cluster is what a user perceives as a single character (e.g., é = e + combining accent).
 */

// Grapheme-cluster-aware string length
$str = "é"; // U+0065 U+0301 (2 code points, but 1 grapheme cluster)
echo grapheme_strlen($str); // 1 (not 2)

// Substring by grapheme clusters
$emoji = "Hello 👋🏽 World";
echo grapheme_substr($emoji, 0, 7); // "Hello 👋" (not byte-truncated)

// Find position of a grapheme cluster
$haystack = "naïve";
$pos = grapheme_strpos($haystack, "ï");
echo $pos; // 2
