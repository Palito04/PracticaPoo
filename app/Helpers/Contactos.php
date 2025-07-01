<?php
namespace App\Helpers;

use function Symfony\Component\Clock\now;

class Contactos {
    public static function getDatos():array{
        $ahora = now();
        $contactos = [
            [
                'id' => 1,
                'name' => 'JIII',
                'email' => 'jisi@ajio.com',
                'message' => 'no se que poner xd',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 2,
                'name' => 'JIII',
                'email' => 'jisi@ajio.com',
                'message' => 'no se que poner xd',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 3,
                'name' => 'JIII',
                'email' => 'jisi@ajio.com',
                'message' => 'no se que poner xd',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ]
        ];
        return $contactos;
    }

}