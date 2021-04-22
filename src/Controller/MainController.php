<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
       /*
        return $this->json([
            'message' => 'Welcome Bro!',
        ]);
       */
       //return new Response('<h1>Hellooo</h1>');
       return $this->render('Home/index.html.twig');
    }

    /**
     * @Route("/cus/{user?}", name="cus")
     */
    public function custom(Request $request){

        $name = $request->get('user');
        //return new Response('<h1>Welcome ' .$name.'!  </h1>');
        return $this->render('Home/cus.html.twig',[
            'user'=> $name
        ]);
    }
}
