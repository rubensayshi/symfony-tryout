<?php

namespace GoGreat\CMSBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontpageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMSBaseBundle:Frontpage:index.html.php');
    }
}
