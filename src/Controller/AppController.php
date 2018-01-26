<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    /**
     * @Route("/", name="app")
     */
    public function index()
    {
    	$var = "A dummy var";

    	dump($var);
        return $this->render("base.html.twig", ["var" => $var]);
    }
}
