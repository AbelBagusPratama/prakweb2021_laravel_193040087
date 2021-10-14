<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Abel Bagus Pratama",
        "email"=> "abelbagusp@gmail.com",
        "image" => "abel.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Abel Bagus Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quia praesentium facere hic, ad necessitatibus magnam recusandae cupiditate, amet quod rerum. Quibusdam ipsam vero fuga! Eaque laborum impedit soluta itaque blanditiis repellat esse labore minus nam eos, assumenda optio deleniti harum at atque iusto ducimus neque. Culpa non laboriosam, consequuntur ducimus aspernatur cumque pariatur repudiandae impedit natus exercitationem, sit a temporibus iste. Dolorum est odit, ratione fugit sint, laboriosam vitae corrupti quidem voluptates aspernatur iste ducimus voluptatibus molestias dolor sunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tono Jon",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur molestiae, eaque id unde ratione distinctio dolores nihil maxime tenetur aut labore fugit, quasi molestias quo reprehenderit cum sit. Expedita, incidunt provident. Quod, dolore odit illum autem dicta saepe. Ratione veritatis praesentium optio quaerat non ut similique reiciendis iste hic qui eveniet quas sit porro est, architecto in laudantium doloremque quasi? Tenetur fugiat, ipsam iste maxime reiciendis nam nobis voluptatum officiis delectus inventore eos sapiente porro corporis consequatur, earum fuga placeat eveniet mollitia laboriosam! Itaque, veritatis libero quod quisquam tenetur atque veniam est ipsam quae quaerat? Accusantium enim voluptas deserunt consequuntur!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Abel Bagus Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quia praesentium facere hic, ad necessitatibus magnam recusandae cupiditate, amet quod rerum. Quibusdam ipsam vero fuga! Eaque laborum impedit soluta itaque blanditiis repellat esse labore minus nam eos, assumenda optio deleniti harum at atque iusto ducimus neque. Culpa non laboriosam, consequuntur ducimus aspernatur cumque pariatur repudiandae impedit natus exercitationem, sit a temporibus iste. Dolorum est odit, ratione fugit sint, laboriosam vitae corrupti quidem voluptates aspernatur iste ducimus voluptatibus molestias dolor sunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tono Jon",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur molestiae, eaque id unde ratione distinctio dolores nihil maxime tenetur aut labore fugit, quasi molestias quo reprehenderit cum sit. Expedita, incidunt provident. Quod, dolore odit illum autem dicta saepe. Ratione veritatis praesentium optio quaerat non ut similique reiciendis iste hic qui eveniet quas sit porro est, architecto in laudantium doloremque quasi? Tenetur fugiat, ipsam iste maxime reiciendis nam nobis voluptatum officiis delectus inventore eos sapiente porro corporis consequatur, earum fuga placeat eveniet mollitia laboriosam! Itaque, veritatis libero quod quisquam tenetur atque veniam est ipsam quae quaerat? Accusantium enim voluptas deserunt consequuntur!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Pos",
        "post" => $new_post 
    ]);
});
