<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller {

    /**
     * @Route("/", name="home")
     */
    public function indexAction() {
        return $this->render('AppBundle:newsletter:index.html.twig');
    }
    
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction() {
        return $this->render('AppBundle:newsletter:about.html.twig');
    }

}
