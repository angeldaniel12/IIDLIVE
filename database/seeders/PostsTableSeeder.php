<?php


namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::truncate();
        Category::truncate();
        Tag::truncate();


        // $category=new Category;
        // $category->nameCategoria = "Tecnologico";
        // $category->save(); 

        // $category=new Category;
        // $category->nameCategoria = "Cultural";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Social";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Academico";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Politico";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Deportes";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Cine";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Lugares";
        // $category->save();

        // $category=new Category;
        // $category->nameCategoria = "Viajes";
        // $category->save();

        // $post= new Post;
        // $post->title = "Mi primer post";
        // $post->excerpt = "Extracto de mi primer post";
        // $post->body= "Contenido de mi primer post";
        // $post->published_at = Carbon::now()->subDays(2);
        // $post->category_id = 2;
        // $post->user_id=1;
       
        // $post->save();
        


        // $post= new Post;
        // $post->title = "Mi segundo post";
        // $post->excerpt = "Extracto de mi segundo post";
        // $post->body= "Contenido de mi segundo post";
        // $post->published_at = Carbon::now()->subDays(4);
        // $post->category_id = 1;
        // $post->user_id=1;
        // $post->save();
       


        // $post= new Post;
        // $post->title = "Oaxaca esta en malos pasos de la delincuencia";
        // $post->excerpt = "oaxaca es mas peligroso que en otros tiempos";
        // $post->body= "NO MAS A LA DELICUENCIA";
        // $post->published_at = Carbon::now()->subDays();
        // $post->category_id = 3;
        // $post->user_id=1;
      
        // $post->save();
        
    }

}
