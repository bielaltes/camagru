<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Biel Altes',
            'username' => 'bielaltes',
            'email' => 'biel@altes.com',
        ]);
        User::factory(20)->create();

        $users = User::all()->shuffle();

        foreach ($users as $user) {
            $n = random_int(1,10);
            Post::factory($n)->create([
                'user_id'=> $user->id,
            ]);
        }

        $posts = Post::all()->shuffle();
        foreach ($posts as $post) {
            $users = User::inRandomOrder()->take(rand(0, 4))->get();
            foreach ($users as $user) {
                Comment::factory()->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            }
            $users = User::inRandomOrder()->take(rand(0, 15))->get();
            foreach ($users as $user) {
                Like::factory()->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
