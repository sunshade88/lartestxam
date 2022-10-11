<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
            'title'=>'Post one',
            'excerpt'=>'Post one excerpt ...',
            'body'=>'Post one body ...',
            'min_to_read' => 2,
            'image_path' => 'empty',
            'is_published'=>false,
            ],
            [
            'title'=>'Post two',
            'excerpt'=>'Post two excerpt ...',
            'body'=>'Post two body ...',
            'min_to_read' => 3,
            'image_path' => 'empty',
            'is_published'=>false,
            ]
            ];
            
            foreach ($posts as $key => $value) {
                Post::create($value);
            }
    }
}