<?php
namespace App\Helpers;

use Carbon\Carbon;

class Obras {
    public static function getDatos():array{
        $ahora = Carbon::now();
        $obras = [
            [
                'id' => 1,
                'title' => 'Mi casa',
                'description' => 'Yo vivo en Granada, una ciudad pequeña que.',
                'url_image' => 'https://assets.pinterest.com/ext/embed.html?id=28710516369950855',
                'autor' => 'Julian',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 2,
                'title' => 'Armando',
                'description' => 'Mmm… creo que van a ser demasiado dulces para mí. ¿Tienes algo más ácido?',
                'url_image' => 'https://assets.pinterest.com/ext/embed.html?id=3237030977615775',
                'autor' => 'Julian',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ],
            [
                'id' => 3,
                'title' => 'Armando',
                'description' => 'El verde es de manzana y el amarillo de mango. Y el marrón, aunque parezca de chocolate, es de café. También tengo este blanco que es de yogur y es muy refrescante.',
                'url_image' => 'https://assets.pinterest.com/ext/embed.html?id=56998751528628450',
                'autor' => 'Julian',
                'created_at' => $ahora,
                'updated_at' => $ahora,
            ]
        ];
        return $obras;
    }

}