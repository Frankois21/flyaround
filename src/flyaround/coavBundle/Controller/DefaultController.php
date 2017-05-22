<?php

namespace flyaround\coavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('flyaroundcoavBundle:Default:index.html.twig');
    }
}
