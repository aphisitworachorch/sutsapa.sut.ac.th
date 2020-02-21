<?php


namespace App\GraphQL\Queries;

use App\Models\Discussion;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class DiscussionQuery extends Query
{
    protected $attributes = [
        'name' => 'Discussion' ,
    ];

    public function type(): Type
    {
        return Type::listOf ( GraphQL::type ( 'Discussion' ) );
    }

    public function resolve($root , $args)
    {
        return Discussion::all ();
    }
}
