@props([
    'type' => 'default'
])

@php
    $styles = [
        'success' => 'background: #e5f4e9; color: #327448;',
        'warning' => 'background: #fff2d8; color: #946b16;',
        'danger'  => 'background: #fde8e8; color: #a33b3b;',
        'default' => 'background: #f0e7ec; color: #8c526a;',
    ];

    $badgeStyle = $styles[$type] ?? $styles['default'];
@endphp

<span
    {{ $attributes->merge([
        'style' => '
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            ' . $badgeStyle
    ]) }}
>
    {{ $slot }}
</span>