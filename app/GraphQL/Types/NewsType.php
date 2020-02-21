<?php


namespace App\GraphQL\Types;

use App\Models\News;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class NewsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'News' ,
        'description' => 'Details about News' ,
        'model' => News::class
    ];

    public function fields(): array
    {
        return [
            'news_title' => [
                'type' => Type::string () ,
                'description' => 'News Title'
            ] ,
            'news_content' => [
                'type' => Type::string () ,
                'description' => 'News Content'
            ] ,
            'created_at' => [
                'type' => Type::string () ,
                'description' => 'News Created at'
            ] ,
            'updated_at' => [
                'type' => Type::string () ,
                'description' => 'News Updated at'
            ]
        ];
    }
}
