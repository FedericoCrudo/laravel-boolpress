<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for ($i=0; $i <5 ; $i++) { 
             $newtag= new tag();
             
            $newtag->name=$faker->words(3,true);
    
            $slug=Str::slug($newtag->name);
            $slug_base=$slug;
            $tag_check= tag::where('slug',$slug)->first();
            
            $count=1;
             while($tag_check){
                $slug=$slug_base. '-'. $count;
                $tag_check=tag::where('slug',$slug)->first();
                $count++;
             }
             
             $newtag->slug=Str::slug($slug);
             $newtag->save();
         }   
    }
}
