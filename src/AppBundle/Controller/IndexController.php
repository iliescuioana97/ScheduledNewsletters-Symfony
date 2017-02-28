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
     * @Route("/history", name="history")
     */
    public function historyAction() {
        return $this->render('AppBundle:newsletter:history.html.twig');
    }

    /**
     * @Route("/music", name="music")
     */
    public function musicAction() {
        return $this->render('AppBundle:newsletter:music.html.twig');
    }

    /**
     * @Route("/literature", name="literature")
     */
    public function literatureAction() {
        return $this->render('AppBundle:newsletter:literature.html.twig');
    }

    /**
     * @Route("/painting", name="painting")
     */
    public function paintingAction() {
        return $this->render('AppBundle:newsletter:painting.html.twig');
    }

}
