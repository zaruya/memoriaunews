<?php   

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all(){
        return [  
    [
        'id' => 1,
        'slug' => 'judul-post-pertama',
    'title'=>'Artikel 1',
    'author'=>'Rahmat Mulia',
    'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis quibusdam voluptates maxime sequi non dolorem, impedit unde ad recusandae id, aliquam dolor ab at tempora officiis omnis nemo? A, vero'
    ],
    [
        'id' => 2,
        'slug' => 'judul-post-kedua',
        'title'=>'Artikel 2',
    'author'=>'Rahmat Mulia',
    'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione omnis sunt adipisci minima asperiores exercitationem quia molestiae reprehenderit. Inventore mollitia nulla minima, hic sint dolorem in recusandae repellendus molestias reiciendis.'
    ]
    ];
    }
    public static function find($slug):array
    {
      

        $post= Arr::first(static::all(), fn ($post)=> $post ['slug'] == $slug);   
        if(! $post){
            abort(404);
        }
    return $post;
    }
    }