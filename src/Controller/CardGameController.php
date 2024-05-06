<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardGameController extends AbstractController
{
    #[Route("/session/", name: "session_show")]
    public function show_session(
        SessionInterface $session
        ): Response
    {

        $session->set("pig_round", 100);
        $session->set("pig_round2", 200);
        $session->set("pig_round3", 300);

        $roundTotal = [
            "pig_round" => $session->get("pig_round"),
            "pig_round2" => $session->get("pig_round2"),
            "pig_round3" => $session->get("pig_round3"),
        ];

        return $this->render('card/session.html.twig', $roundTotal);

    }

    #[Route("/session/delete", name: "session_delete")]
    public function delete_session(
        SessionInterface $session
    ): Response
    {
        $session->clear();

        return $this->render('card/session.html.twig');
    }
}