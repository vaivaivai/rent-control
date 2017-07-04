<?php

namespace AppBundle\Controller\View\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/users")
     * @Method({"GET"})
     */
    public function listAction()
    {
        $list = $this->get('model.user')->findAll();
        return $this->render('AppBundle:User:list.html.twig', ['list' => $list]);
    }
}
