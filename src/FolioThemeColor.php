<?php

namespace Renaud\FilamentFolioTheme;

class FolioThemeColor
{
    /**
     * @var array<int, string>
     */
    public const Primary = [
        50 => 'oklch(0.975 0.018 150)',
        100 => 'oklch(0.945 0.035 150)',
        200 => 'oklch(0.90 0.05 152)',
        300 => 'oklch(0.82 0.07 152)',
        400 => 'oklch(0.70 0.09 152)',
        500 => 'oklch(0.58 0.10 152)',
        600 => 'oklch(0.48 0.095 152)',
        700 => 'oklch(0.40 0.08 152)',
        800 => 'oklch(0.34 0.065 152)',
        900 => 'oklch(0.28 0.05 152)',
        950 => 'oklch(0.20 0.035 152)',
    ];

    /**
     * @var array<int, string>
     */
    public const Gray = [
        50 => 'oklch(0.975 0.012 82)',
        100 => 'oklch(0.952 0.018 80)',
        200 => 'oklch(0.915 0.022 76)',
        300 => 'oklch(0.86 0.026 72)',
        400 => 'oklch(0.73 0.028 68)',
        500 => 'oklch(0.60 0.026 64)',
        600 => 'oklch(0.50 0.022 60)',
        700 => 'oklch(0.42 0.018 55)',
        800 => 'oklch(0.32 0.014 50)',
        900 => 'oklch(0.25 0.012 48)',
        950 => 'oklch(0.18 0.010 45)',
    ];

    /**
     * @return array<string, array<int, string>>
     */
    public static function palette(): array
    {
        return [
            'primary' => self::Primary,
            'gray' => self::Gray,
        ];
    }
}
