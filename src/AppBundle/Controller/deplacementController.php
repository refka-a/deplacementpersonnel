<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

use AppBundle\Entity\Deplacement;

class deplacementController extends Controller {
/**
* @Route("/liste-deplacement")
*/

public function listewdepl() {

  $deplacements = $this->getDoctrine()
    ->getRepository('AppBundle:Deplacement')
    ->findAll();

  return $this->render(
    'deplacement/liste.html.twig',
    array('deplacements' => $deplacements)
    );

}
/**
* @Route("/detail-deplacement")
*/

public function detaildep(Request $request) {

  $deplacement = new Deplacement();
  $form = $this->createFormBuilder($deplacement)
    ->add('nom', TextType::class)
    ->add('prenom', TextType::class)
    ->add('email', EmailType::class)
    ->add('ville', ChoiceType::class, [
    'choices' => [
            'Tunis'=> 'Tunis',
            'Sousse'=> 'Sousse',
            'Sfax'=> 'Sfax',
            'Djerba'=> 'Djerba',
        ],
])
    ->add('datedepart', DateType::class)
    ->add('timedepart', TimeType::class)
    ->add('dateretour', DateType::class)
    ->add('timeretour', TimeType::class)

    ->add('moyen', TextType::class)
    ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
    ->add('reset', ResetType::class, array('label' => 'Supprimer'))
    ->getForm();

  $form->handleRequest($request);

  if ($form->isSubmitted()) {

    $deplacement = $form->getData();

    $em = $this->getDoctrine()->getManager();
    $em->persist($deplacement);
    $em->flush();

    return $this->redirect('/liste-deplacement');

  }

  return $this->render(
    'deplacement/detail.html.twig',
    array('form' => $form->createView())
    );

}

}
