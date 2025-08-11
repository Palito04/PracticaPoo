<?php
namespace App\Helpers;

use function Symfony\Component\Clock\now;

class Categorias {
    public static function getDatos():array{
        $ahora = now();
        $categorias = [
            [
                'id' => 2,
                'name' => 'JIII',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 2,
                'name' => 'JIII',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 2,
                'name' => 'JIII',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ]
        ];
        return $categorias;
    }

}