<?php

namespace App\Enums;

use ParaTest\JUnit\MessageType;

enum MassageType: string
{
    case CREATED = "Berhasil menambahkan";

    case UPDATED = "Berhasil memperbarui";
    case DELETED = "Berhasil menghapus";
    case ERROR = "Terjadi Kesalahan, silahkan coba lagi nanti";

    public function message(string $entity = '', ?string $error = null): string
    {
        if ($this === MessageType::error && $error ){
            return "{$this->value} {$error}";
        }

        return "{$this->value} {$entity}";
    }
}
