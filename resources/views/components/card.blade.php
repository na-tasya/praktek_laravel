<div
    {{ $attributes->merge([
        'style' => '
            background: #ffffff;
            border: 1px solid #eee5e9;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(85, 51, 68, 0.04);
        '
    ]) }}
>
    {{ $slot }}
</div>