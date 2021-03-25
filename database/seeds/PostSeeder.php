<?php
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Post;
use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for ($i=0; $i <5 ; $i++) { 
             $newPost= new Post();
             
            $newPost->title=$faker->sentence(4);
             $newPost->content=$faker->text(500);
            $slug=Str::slug($newPost->title);
            $userCount=Count(User::all()->toArray());
            $newPost->user_id=rand(1,$userCount);
            $firstslug=$slug;
             $slugcheck=Post::where('slug',$slug)->first();
            $count=1;
             while($slugcheck){
                $slug=$firstslug. '-'. $count;
                $slugcheck=Post::where('slug',$slug)->first();
                $count++;
             }
             
             $newPost->slug=Str::slug($slug);
             $newPost->save();
         }   
    }
}
