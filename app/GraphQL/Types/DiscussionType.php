<?php


namespace App\GraphQL\Types;

use App\Models\Discussion;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class DiscussionType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Discussion' ,
        'description' => 'Details about Discussion' ,
        'model' => Discussion::class
    ];

    public function fields(): array
    {
        return [
            'discussion_title' => [
                'type' => Type::string () ,
                'description' => 'Discussion Title'
            ] ,
            'discussion_content' => [
                'type' => Type::string () ,
                'description' => 'Discussion Content'
            ]
        ];
    }
}
