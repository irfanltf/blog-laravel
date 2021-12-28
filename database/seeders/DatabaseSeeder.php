<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Muhammad Irfan Lutfi',
        //     'email' => 'irfan@polinela.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Agnesya Dian Tiara',
        //     'email' => 'agnes@polinela.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'judul' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi. Natus laudantium quidem quos voluptate sed blanditiis impedit soluta ullam fuga qui animi voluptates, recusandae sequi quo aut at quam ad distinctio voluptatibus quisquam nisi perferendis deleniti ipsum. Incidunt nobis non voluptas facilis maxime esse accusantium nesciunt earum nisi suscipit illum maiores, commodi voluptates laudantium laborum in voluptatibus sed numquam tempore iusto voluptatum ea perferendis pariatur. Perspiciatis animi aliquam, fuga assumenda culpa eius nulla provident corporis id labore quibusdam inventore nam! Quas sequi doloremque amet!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'judul' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi. Natus laudantium quidem quos voluptate sed blanditiis impedit soluta ullam fuga qui animi voluptates, recusandae sequi quo aut at quam ad distinctio voluptatibus quisquam nisi perferendis deleniti ipsum. Incidunt nobis non voluptas facilis maxime esse accusantium nesciunt earum nisi suscipit illum maiores, commodi voluptates laudantium laborum in voluptatibus sed numquam tempore iusto voluptatum ea perferendis pariatur. Perspiciatis animi aliquam, fuga assumenda culpa eius nulla provident corporis id labore quibusdam inventore nam! Quas sequi doloremque amet!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'judul' => 'Judul Ketiga',
        //     'slug' => 'judul-ketia',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, unde. Autem rem expedita deleniti repellat sit incidunt tempore voluptatum est enim aut, eos quos nisi. Natus laudantium quidem quos voluptate sed blanditiis impedit soluta ullam fuga qui animi voluptates, recusandae sequi quo aut at quam ad distinctio voluptatibus quisquam nisi perferendis deleniti ipsum. Incidunt nobis non voluptas facilis maxime esse accusantium nesciunt earum nisi suscipit illum maiores, commodi voluptates laudantium laborum in voluptatibus sed numquam tempore iusto voluptatum ea perferendis pariatur. Perspiciatis animi aliquam, fuga assumenda culpa eius nulla provident corporis id labore quibusdam inventore nam! Quas sequi doloremque amet!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
