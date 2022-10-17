<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    #[Route('/', name: 'home')]

    public function index(){
        
        return $this->render(view:'home/base.html.twig');
    
    }

    #[Route('/custom/{name?}', name: 'custom')]
    /**
     *@param Request $request
     *@return Response
     */
    
    public function custom(Request $request){

        $name = $request->get(key:'name');

        return $this->render(view:'home/custom.html.twig');
    }

    #[Route('/', name: 'css')]
    public function css(){

        return $this->render(view:'home/quiz1.css');
    }
}
