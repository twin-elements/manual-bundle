<?php

namespace TwinElements\ManualBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use TwinElements\AdminBundle\Model\CrudControllerTrait;

class ManualController extends AbstractController
{
    use CrudControllerTrait;

    /**
     * @Route("/manual", name="cms_manual", methods={"GET"})
     */
    public function manual()
    {
        return $this->render('@TwinElementsManual/manual.html.twig');
    }
}
