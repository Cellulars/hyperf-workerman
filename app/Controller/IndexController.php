<?php

declare(strict_types=1);

namespace App\Controller;

// use Hyperf\DbConnection\Db;

class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        // $users = Db::select('SELECT * FROM user;');

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
