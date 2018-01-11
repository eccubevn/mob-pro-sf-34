<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @Route("/login")
     *
     * @return Response
     */
    public function login()
    {
        return new Response('login');
    }

    /**
     * @Route("/register")
     *
     * @return Response
     */
    public function register()
    {
        return new Response('register');
    }
}