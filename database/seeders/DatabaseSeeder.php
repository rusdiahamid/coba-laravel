<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Rusdia Hamid',
        //     'email' => 'rusdia.hamid@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // post::create([
        //     'title' => 'Laravel 5.7',
        //     'slug' => 'laravel-5.7',
        //     'excerpt' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.',
        //     'body' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. It is based on Symfony, and its main components are commonly referred to as "controllers" and "views".',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // post::create([
        //     'title' => 'Vue.js',
        //     'slug' => 'vue-js',
        //     'excerpt' => 'Vue.js is a JavaScript library for building user interfaces. It is maintained by Evan You, and it is designed to be incrementally adoptable across the entire development lifecycle.',
        //     'body' => 'Vue.js is a JavaScript library for building user interfaces. It is maintained by Evan You, and it is designed to be incrementally adoptable across the entire development lifecycle. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid aspernatur labore sit inventore praesentium possimus ipsam? Aperiam eum, eligendi porro quidem illo impedit quasi quae saepe laudantium rerum. Recusandae omnis doloribus placeat sequi reprehenderit veniam odio porro quos dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'React.js',
        //     'slug' => 'react-js',
        //     'excerpt' => 'React is a JavaScript library for building user interfaces. It is maintained by Facebook, and it is designed to be incrementally adoptable across the entire development lifecycle.',
        //     'body' => 'React is a JavaScript library for building user interfaces. It is maintained by Facebook, and it is designed to be incrementally adoptable across the entire development lifecycle. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid aspernatur labore sit inventore praesentium possimus ipsam? Aperiam eum, eligendi porro quidem illo impedit quasi quae saepe laudantium rerum. Recusandae omnis doloribus placeat sequi reprehenderit veniam odio porro quos dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Angular.js',
        //     'slug' => 'angular-js',
        //     'excerpt' => 'Angular is a JavaScript library for building user interfaces. It is maintained by Facebook, and it is designed to be incrementally adoptable across the entire development lifecycle.',
        //     'body' => 'Angular is a JavaScript library for building user interfaces. It is maintained by Facebook, and it is designed to be incrementally adoptable across the entire development lifecycle. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid aspernatur labore sit inventore praesentium possimus ipsam? Aperiam eum, eligendi porro quidem illo impedit quasi quae saepe laudantium rerum. Recusandae omnis doloribus placeat sequi reprehenderit veniam odio porro quos dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
