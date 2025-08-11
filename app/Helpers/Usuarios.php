<?php
namespace App\Helpers;

use function Symfony\Component\Clock\now;

class Usuarios {
    public static function getDatos():array{
        $ahora = now();
        $usuarios = [
            [
                'id' => 1,
                'name' => 'Armando',
                'email' => 'supercool@tutorials.com',
                'password' => 'contraseñasuperdificil',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 2,
                'name' => 'juan',
                'email' => 'supercool@tutorials.com',
                'password' => 'contraseñasuperdificil',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 3,
                'name' => 'Tuvieja',
                'email' => 'supercool@tutorials.com',
                'password' => 'contraseñasuperdificil',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ]
        ];
        return $usuarios;
    }

}