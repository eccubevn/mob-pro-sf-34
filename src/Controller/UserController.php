<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @Route("/login")
     *
     * @Template("login.html.twig")
     *
     * @return array
     */
    public function login()
    {
        $form = $this->createForm(\App\Form\LoginType::class);

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * @Route("/register")
     *
     *  @Template("register.html.twig")
     *
     * @return array
     */
    public function register()
    {
        $form = $this->createForm(\App\Form\RegisterType::class);

        return [
            'form' => $form->createView()
        ];
    }
}