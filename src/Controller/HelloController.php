<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello")
     */
    public function helloWorld()
    {
        return new Response(
            '<html><body>Symfony says: hello world!</body></html>'
        );
    }
}
