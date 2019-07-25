<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           factory(\App\Product::class,30)->create();
        // $first = [
        //     'image'        => 'uploads/products/book1.png',
        //     'product'      => 'New-Book',
        //     'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lacinia orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus porta magna. Donec lacinia rhoncus arcu id congue. Cras a interdum dui. Sed a euismod enim. Integer tempor metus viverra tempus placerat. Integer pellentesque nunc in leo pulvinar dapibus. Nullam consequat in ex vel maximus. Cras tellus sem, lobortis non dapibus sed, luctus vitae dolor. Etiam euismod, ligula ac tempus varius, nisl lacus posuere mi, vel aliquet leo dui eu neque. Nulla vestibulum aliquam dignissim. Aenean ultrices tellus quis tellus accumsan volutpat at eu justo. Cras ut dictum diam.',

        //     'price'        =>  1000,
        //     'slug'         => str_slug('New-Book')
        // ];

        // $second = [
        //     'image'        => 'uploads/products/book2.png',
        //     'product'      => 'Fresh-Book',
        //     'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lacinia orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus porta magna. Donec lacinia rhoncus arcu id congue. Cras a interdum dui. Sed a euismod enim. Integer tempor metus viverra tempus placerat. Integer pellentesque nunc in leo pulvinar dapibus. Nullam consequat in ex vel maximus. Cras tellus sem, lobortis non dapibus sed, luctus vitae dolor. Etiam euismod, ligula ac tempus varius, nisl lacus posuere mi, vel aliquet leo dui eu neque. Nulla vestibulum aliquam dignissim. Aenean ultrices tellus quis tellus accumsan volutpat at eu justo. Cras ut dictum diam.',

        //     'price'        => 1500,
        //     'slug'         => str_slug('Fresh-Book')
        // ];

        // $third = [
        //     'image'        => 'uploads/products/book3.png',
        //     'product'      => 'Mint-Book',
        //     'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lacinia orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus porta magna. Donec lacinia rhoncus arcu id congue. Cras a interdum dui. Sed a euismod enim. Integer tempor metus viverra tempus placerat. Integer pellentesque nunc in leo pulvinar dapibus. Nullam consequat in ex vel maximus. Cras tellus sem, lobortis non dapibus sed, luctus vitae dolor. Etiam euismod, ligula ac tempus varius, nisl lacus posuere mi, vel aliquet leo dui eu neque. Nulla vestibulum aliquam dignissim. Aenean ultrices tellus quis tellus accumsan volutpat at eu justo. Cras ut dictum diam.',

        //     'price'        => 2000,
        //     'slug'         => str_slug('Mint-Book')
        // ];

        // $fourth = [
        //     'image'        => 'uploads/products/book4.png',
        //     'product'      => 'Pataka-Book',
        //     'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lacinia orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus porta magna. Donec lacinia rhoncus arcu id congue. Cras a interdum dui. Sed a euismod enim. Integer tempor metus viverra tempus placerat. Integer pellentesque nunc in leo pulvinar dapibus. Nullam consequat in ex vel maximus. Cras tellus sem, lobortis non dapibus sed, luctus vitae dolor. Etiam euismod, ligula ac tempus varius, nisl lacus posuere mi, vel aliquet leo dui eu neque. Nulla vestibulum aliquam dignissim. Aenean ultrices tellus quis tellus accumsan volutpat at eu justo. Cras ut dictum diam.',

        //     'price'        => 3000,
        //     'slug'         => str_slug('Pataka-Book')
        // ];

        // $fifth = [
        //     'image'        => 'uploads/products/book5.png',
        //     'product'      => 'Pasta-Book',
        //     'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lacinia orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus porta magna. Donec lacinia rhoncus arcu id congue. Cras a interdum dui. Sed a euismod enim. Integer tempor metus viverra tempus placerat. Integer pellentesque nunc in leo pulvinar dapibus. Nullam consequat in ex vel maximus. Cras tellus sem, lobortis non dapibus sed, luctus vitae dolor. Etiam euismod, ligula ac tempus varius, nisl lacus posuere mi, vel aliquet leo dui eu neque. Nulla vestibulum aliquam dignissim. Aenean ultrices tellus quis tellus accumsan volutpat at eu justo. Cras ut dictum diam.',

        //     'price'        => 4000,
        //     'slug'         => str_slug('Pasta-Book')
        // ];

        //  Product::create($first);
        //  Product::create($second);
        //  Product::create($third);
        //  Product::create($fourth);
        //  Product::create($fifth);

    }
}
