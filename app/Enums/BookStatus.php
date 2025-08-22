<?php

namespace App\Enums;


enum BookStatus: string

{
    case AVALAIBLE = "Tersedia";

    case UNAVALAIBLE = "Tidak Tersedia";

    case LOAN = "Dipinjam";

    case DAMAGED = "Rusak";

    public static function options(): array
    {
        return collect(self::cases())->map(fn($item) =>[
            'value' =>$item->value,
            'label' =>$item->name,
        ])->values()->toArray();
    }

}
