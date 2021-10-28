<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        

      // User::create([
        //   'name' => 'Abel Bagus P',
        //   'email' => 'abelbagusp@gmail.com',
        //   'password' => bcrypt('12345')
       //  ]);

       //   User::create([
        //  'name' => 'Tono Jon',
        //  'email' => 'tonojon@gmail.com',
        //  'password' => bcrypt('12345')
    //  ]);

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

    // Post::create([
    //     'title' => 'Judul Pertama',
    //     'slug' => 'judul-pertama',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius.',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius. Voluptates ducimus sunt harum sequi earum consectetur sed similique blanditiis consequatur neque odit assumenda veniam commodi rerum esse dolorem velit voluptatibus, voluptate quos totam provident. Facilis commodi officiis consequatur odio qui doloremque esse, impedit assumenda labore, aliquam animi voluptatem facere doloribus sed nihil! Quas quidem saepe tenetur. Corporis laborum, inventore non distinctio accusantium nostrum excepturi, quo quibusdam possimus iure eum modi quidem, consectetur officiis explicabo! Sint laborum consequatur quam aperiam aliquid distinctio officia dolore modi quasi officiis maiores sapiente dolor quaerat animi rerum, voluptatum iste consequuntur perferendis.',
    //     'category_id' => 1,
    //     'user_id' => 1,

    // ]);

    // Post::create([
    //     'title' => 'Judul Kedua',
    //     'slug' => 'judul-kedua',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius.',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius. Voluptates ducimus sunt harum sequi earum consectetur sed similique blanditiis consequatur neque odit assumenda veniam commodi rerum esse dolorem velit voluptatibus, voluptate quos totam provident. Facilis commodi officiis consequatur odio qui doloremque esse, impedit assumenda labore, aliquam animi voluptatem facere doloribus sed nihil! Quas quidem saepe tenetur. Corporis laborum, inventore non distinctio accusantium nostrum excepturi, quo quibusdam possimus iure eum modi quidem, consectetur officiis explicabo! Sint laborum consequatur quam aperiam aliquid distinctio officia dolore modi quasi officiis maiores sapiente dolor quaerat animi rerum, voluptatum iste consequuntur perferendis.',
    //     'category_id' => 1,
    //     'user_id' => 1,

    // ]);

    // Post::create([
    //     'title' => 'Judul Ketiga',
    //     'slug' => 'judul-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius.',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius. Voluptates ducimus sunt harum sequi earum consectetur sed similique blanditiis consequatur neque odit assumenda veniam commodi rerum esse dolorem velit voluptatibus, voluptate quos totam provident. Facilis commodi officiis consequatur odio qui doloremque esse, impedit assumenda labore, aliquam animi voluptatem facere doloribus sed nihil! Quas quidem saepe tenetur. Corporis laborum, inventore non distinctio accusantium nostrum excepturi, quo quibusdam possimus iure eum modi quidem, consectetur officiis explicabo! Sint laborum consequatur quam aperiam aliquid distinctio officia dolore modi quasi officiis maiores sapiente dolor quaerat animi rerum, voluptatum iste consequuntur perferendis.',
    //     'category_id' => 2,
    //     'user_id' => 1,

    // ]);

    // Post::create([
    //     'title' => 'Judul Keempat',
    //     'slug' => 'judul-keempat',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius.',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis placeat inventore sint eius. Voluptates ducimus sunt harum sequi earum consectetur sed similique blanditiis consequatur neque odit assumenda veniam commodi rerum esse dolorem velit voluptatibus, voluptate quos totam provident. Facilis commodi officiis consequatur odio qui doloremque esse, impedit assumenda labore, aliquam animi voluptatem facere doloribus sed nihil! Quas quidem saepe tenetur. Corporis laborum, inventore non distinctio accusantium nostrum excepturi, quo quibusdam possimus iure eum modi quidem, consectetur officiis explicabo! Sint laborum consequatur quam aperiam aliquid distinctio officia dolore modi quasi officiis maiores sapiente dolor quaerat animi rerum, voluptatum iste consequuntur perferendis.',
    //     'category_id' => 2,
    //     'user_id' => 2,
    // ]);


    }
}
