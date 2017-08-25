<?php

use Illuminate\Database\Seeder;
use App\Animal;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Animal::create([
        'id'            => 1,
        'name'          => 'Gato',
        'image'         => 'https://misanimales.com/wp-content/uploads/2016/10/crecen-los-gatos.jpg',
        'domestic'      => 'true',
        'jump'          => 'true',
        'bark'          => 'false',
        'extinction'    => 'false',
        'flying'        => 'false',
        'mount'         => 'false',
        'rodent'        => 'false',
        'stripes'       => 'true',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 2,
        'name'          => 'Perro',
        'image'         => 'https://www.mundoperro.net/wp-content/uploads/consejos-perro-feliz-verano-400x300.jpg',
        'domestic'      => 'true',
        'jump'          => 'true',
        'bark'          => 'true',
        'extinction'    => 'false',
        'flying'        => 'false',
        'mount'         => 'false',
        'rodent'        => 'false',
        'stripes'       => 'false',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 3,
        'name'          => 'Panda',
        'image'         => 'https://elblogverde.com/wp-content/uploads/2015/04/osos-panda-600x450.jpg',
        'domestic'      => 'false',
        'jump'          => 'false',
        'bark'          => 'false',
        'extinction'    => 'true',
        'flying'        => 'false',
        'mount'         => 'false',
        'rodent'        => 'false',
        'stripes'       => 'false',
        'glasses'       => 'true'
      ]);

      Animal::create([
        'id'            => 4,
        'name'          => 'Elefante',
        'image'         => 'http://d2on3k3hzjn2sy.cloudfront.net/wp-content/uploads/2011/12/elefante2-800.jpg',
        'domestic'      => 'false',
        'jump'          => 'false',
        'bark'          => 'false',
        'extinction'    => 'true',
        'flying'        => 'false',
        'mount'         => 'true',
        'rodent'        => 'false',
        'stripes'       => 'false',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 5,
        'name'          => 'Tigre',
        'image'         => 'http://oculto.eu/wp-content/uploads/2014/01/tigre.jpg',
        'domestic'      => 'false',
        'jump'          => 'true',
        'bark'          => 'false',
        'extinction'    => 'true',
        'flying'        => 'false',
        'mount'         => 'false',
        'rodent'        => 'false',
        'stripes'       => 'true',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 6,
        'name'          => 'Hamster',
        'image'         => 'http://mascotafiel.com/wp-content/uploads/2016/10/beneficios-de-tener-un-H%C3%A1mster-1_opt.jpg',
        'domestic'      => 'true',
        'jump'          => 'false',
        'bark'          => 'false',
        'extinction'    => 'false',
        'flying'        => 'false',
        'mount'         => 'false',
        'rodent'        => 'true',
        'stripes'       => 'false',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 7,
        'name'          => 'Caballo',
        'image'         => 'https://curiosoando.com/wp-content/uploads/2014/06/caballo_Morgan.jpg',
        'domestic'      => 'true',
        'jump'          => 'true',
        'bark'          => 'false',
        'extinction'    => 'false',
        'flying'        => 'false',
        'mount'         => 'true',
        'rodent'        => 'false',
        'stripes'       => 'false',
        'glasses'       => 'false'
      ]);

      Animal::create([
        'id'            => 8,
        'name'          => 'Aguila',
        'image'         => 'https://i.ytimg.com/vi/mjNKHxhFQSQ/maxresdefault.jpg',
        'domestic'      => 'false',
        'jump'          => 'false',
        'bark'          => 'false',
        'extinction'    => 'true',
        'flying'        => 'true',
        'mount'         => 'false',
        'rodent'        => 'false',
        'stripes'       => 'false',
        'glasses'       => 'false'
      ]);

    }

}
