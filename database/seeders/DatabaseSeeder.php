<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ardillah Setiawan',
            'username' => 'ardy',
            'email' => 'ardy@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'wandut',
        //     'email' => 'wandut@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error quisquam molestiae, quae nihil quia nesciunt totam animi fuga! Voluptates molestiae aliquam, consectetur modi quaerat necessitatibus dolor, ullam magni, facilis corporis fuga. Deserunt, repellendus nesciunt! Repudiandae at pariatur aliquid modi. Dolore repellendus numquam quod inventore odit voluptate laudantium deserunt unde sapiente illo cumque soluta aspernatur maiores sint, explicabo, corporis tempora nesciunt eos modi quibusdam. Rerum, voluptates qui exercitationem aperiam harum rem doloremque dolor iusto eius adipisci? Sit explicabo illo laborum obcaecati labore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error quisquam molestiae, quae nihil quia nesciunt totam animi fuga! Voluptates molestiae aliquam, consectetur modi quaerat necessitatibus dolor, ullam magni, facilis corporis fuga. Deserunt, repellendus nesciunt! Repudiandae at pariatur aliquid modi. Dolore repellendus numquam quod inventore odit voluptate laudantium deserunt unde sapiente illo cumque soluta aspernatur maiores sint, explicabo, corporis tempora nesciunt eos modi quibusdam. Rerum, voluptates qui exercitationem aperiam harum rem doloremque dolor iusto eius adipisci? Sit explicabo illo laborum obcaecati labore?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error quisquam molestiae, quae nihil quia nesciunt totam animi fuga! Voluptates molestiae aliquam, consectetur modi quaerat necessitatibus dolor, ullam magni, facilis corporis fuga. Deserunt, repellendus nesciunt! Repudiandae at pariatur aliquid modi. Dolore repellendus numquam quod inventore odit voluptate laudantium deserunt unde sapiente illo cumque soluta aspernatur maiores sint, explicabo, corporis tempora nesciunt eos modi quibusdam. Rerum, voluptates qui exercitationem aperiam harum rem doloremque dolor iusto eius adipisci? Sit explicabo illo laborum obcaecati labore?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam maiores dolorem ea laudantium culpa cupiditate alias natus earum, autem, voluptas officia nostrum vero eius blanditiis harum similique error quisquam molestiae, quae nihil quia nesciunt totam animi fuga! Voluptates molestiae aliquam, consectetur modi quaerat necessitatibus dolor, ullam magni, facilis corporis fuga. Deserunt, repellendus nesciunt! Repudiandae at pariatur aliquid modi. Dolore repellendus numquam quod inventore odit voluptate laudantium deserunt unde sapiente illo cumque soluta aspernatur maiores sint, explicabo, corporis tempora nesciunt eos modi quibusdam. Rerum, voluptates qui exercitationem aperiam harum rem doloremque dolor iusto eius adipisci? Sit explicabo illo laborum obcaecati labore?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
