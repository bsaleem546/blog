<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++){
            $id = rand(1,19);
            $indexedArray = array("red", "blue", "green", "black");
            $cat = $indexedArray[array_rand($indexedArray)];

            $type = array('Full Time', 'Part Time');
            $ty = $type[array_rand($type)];

            $indexedRate = array("30", "40", "50", "100");
            $rate = $indexedRate[array_rand($indexedRate)];

            Post::create([
                'cate' => $cat,
                'title' => 'Donec rutrum congue leo eget malesuada.',
                'desc' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'post_type' => $ty,
                'rate' => $rate,
                'user_id' => $id
            ]);
        }
    }
}
