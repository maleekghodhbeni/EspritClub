<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/club/get/{nom}', name: 'club_show')]
       public function index($nom): Response
{
    return $this->render('detail.html.twig', [
        'nom' => $nom,
    ]);
}
    #[Route('/getname/{nom}', name:'getname')]
 
public function getName($nom)
{
    return $this->render('detail.html.twig', [
        'nom' => $nom,
    ]);
}


#[Route('/list', name: 'list_formations')]
public function list(): Response
{
    $formations = array(
        array('ref' => 'form147', 'Titre' => 'Formation Symfony 4', 'Description' => 'formation pratique', 'date_debut' => '12/06/2020', 'date_fin' => '19/06/2020', 'nb_participants' => 19),
        array('ref' => 'form177', 'Titre' => 'Formation SOA', 'Description' => 'formation theorique', 'date_debut' => '03/12/2020', 'date_fin' => '10/12/2020', 'nb_participants' => 0),
        array('ref' => 'form178', 'Titre' => 'Formation Angular', 'Description' => 'formation theorique', 'date_debut' => '10/06/2020', 'date_fin' => '14/06/2020', 'nb_participants' => 12)
    );


    // Transform titles to uppercase
   /* foreach ($formations as &$formation) {
        $formation['Titre'] = strtoupper($formation['Titre']);}
    */
   /*
    $count = count($formations);

    return $this->render('list.html.twig', [
        'formations' => $formations,
        'count' => $count,
    ]);
      }
    */
    /*

       $count = count($formations);
    $formationtheorique = array();

    foreach ($formations as $formation) {
        if ($formation['Description'] === 'formation theorique') {
            $formationtheorique[] = strtoupper($formation['Titre']);
        }
    }

    return $this->render('theorique.html.twig', [
        'formations' => $formations,
        'count' => $count,
        'formationtheorique' => $formationtheorique,
    ]);
    */


  /*  $count = count($formations);
    $maxParticipants = 0;
    $formationTitre = '';

    foreach ($formations as $formation) {
        if ($formation['nb_participants'] > $maxParticipants) {
            $maxParticipants = $formation['nb_participants'];
            $formationTitre = $formation['Titre'];
        }
    }

    return $this->render('list.html.twig', [
        'titre' => $formationTitre
    ]);
    */


}}