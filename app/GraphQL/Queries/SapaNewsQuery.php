<?php


namespace App\GraphQL\Queries;

use App\Models\News;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class SapaNewsQuery extends Query
{
    protected $attributes = [
        'name' => 'News' ,
    ];

    public function type(): Type
    {
        return Type::listOf ( GraphQL::type ( 'News' ) );
    }

    public function resolve($root , $args)
    {
        return News::all ();
    }
}
