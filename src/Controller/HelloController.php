<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController{
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
?>