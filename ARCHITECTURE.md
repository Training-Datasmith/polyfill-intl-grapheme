# Architecture: polyfill-intl-grapheme

## Purpose

Provides a pure-PHP fallback for the `Grapheme` class from the `intl` extension
(`grapheme_*` functions and `Grapheme::*` methods). Enables grapheme-cluster-aware
string operations on systems without the `intl` extension.

## Directory Structure

```
Grapheme.php    # Pure-PHP implementation of grapheme_* functions as static methods
bootstrap.php   # Defines global grapheme_* functions if the intl extension is absent
```

## Key Design Decisions

The implementation uses PCRE Unicode properties and grapheme cluster patterns to approximate
the Unicode grapheme cluster segmentation defined by Unicode Standard Annex #29. The native
`intl` implementation is always preferred; this polyfill is a fallback only.

## Extension Points

None — drop-in function polyfill with no extension interfaces.
