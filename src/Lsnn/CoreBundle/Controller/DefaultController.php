<?php

namespace Lsnn\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LsnnCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
