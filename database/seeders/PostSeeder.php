<?php

namespace Database\Seeders;


use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x = 0; $x <= 10; $x++){
            Post::create([
                'title' => 'What is your name?',
                'content' => "The quick brown fox jumps over the lazy dog. In the midst of swirling clouds and rising tides, the ancient oak stood 
                tall and unyielding. Beneath its sprawling branches, time seemed to slow, and the whispers of forgotten tales danced on the wind. 
                A solitary figure approached, cloaked in mystery, their footsteps silent on the dew-kissed grass. As they neared the tree, a glimmer of 
                light pierced the shadowed grove, revealing a hidden path that wound deep into the heart of the forest. Each step taken echoed with the 
                promise of adventure, as the world beyond beckoned with untold secrets and uncharted wonders."
            ]);
        }
    }
}
