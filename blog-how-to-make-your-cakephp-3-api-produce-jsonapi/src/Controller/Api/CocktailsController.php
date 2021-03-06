<?php
namespace App\Controller\Api;

class CocktailsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'name', 'description'
        ]
    ];
}
