<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product ([
          'title' => 'Camiseta River',
          'price' => 10,
           'brand' => 'Adidas',
            'category' => 'Hombre',
             'description' => 'El Mas Grande De Todos',
              'img' => 'http://images.ar.netshoes.net/ar/produtos/44/002-0778-044/002-0778-044_zoom1.jpg',
        ]);

        $product->save();

        $product = new \App\Product ([
          'title' => 'Camiseta Independiente la ultima vez que gano una Libertadores 1984....',
          'price' => 1,
           'brand' => 'Nike',
            'category' => 'Hombre',
             'description' => 'Nunca lo vi campeon en mi vida de la libertadores....',
              'img' => 'https://http2.mlstatic.com/camiseta-retro-independiente-campeon-intercontinental-1984-D_NQ_NP_948701-MLA20415585678_092015-F.webp',
        ]);

        $product->save();

    }
}
