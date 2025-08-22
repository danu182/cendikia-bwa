<?php

namespace App\Enums;

enum FinePaymentStatus: string

{
    case PENDING = "Tertunda";
    case SUCCESS = "Sukese";
    case FAILED = "Gagal";


    public static function options(): array
    {
        return collect(self::cases())->map(fn($item) =>[
            'value' =>$item->value,
            'label' =>$item->value,
        ])->values()->toArray();
    }


}
