<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    #[Route('/', name: 'user_index')]
    public function number(int $max): Response
    {
        $id = random_int(0, $max);

        return new Response(
            '<html><body>User ID: '.$id.'</body></html>'
        );
    }
}
