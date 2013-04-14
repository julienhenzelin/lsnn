<?php

namespace Lsnn\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Lsnn\CoreBundle\Entity\Creative;
use Lsnn\CoreBundle\Form\CreativeType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction(Request $request)
    {

        // @todo : filter by skill
        
        // list all creative people
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LsnnCoreBundle:Creative')->findAll();

        return $this->render('LsnnCoreBundle:Default:index.html.twig', array(
            'creatives' => $entities,
        ));
    }

    /**
     * Displays a form to create a new Creative entity.
     *
     * @Method("GET")
     * @Template()
     */
    public function newAction(Request $request)
    {

        $entity  = new Creative();
        $form = $this->createForm(new CreativeType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('lsnn_core_homepage', array('id' => $entity->getId())));
            }

            return array(
                'entity' => $entity,
                'form'   => $form->createView(),
            );

         } 

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays About page
     *
     * @Template()
     */
    public function aboutAction(Request $request)
    {
    }
}
