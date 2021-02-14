<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Editeur;
use App\Entity\Livre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $auteurs = $this->getDoctrine()->getRepository( Auteur::class)->findAll();
        $editeurs = $this->getDoctrine()->getRepository( Editeur::class)->findAll();
        $livres = $this->getDoctrine()->getRepository( Livre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository( Categorie::class)->findAll();
        return $this->render('home/index.html.twig', [
            'auteurs' => $auteurs,
            'editeurs' => $editeurs,
            'livres' => $livres,
            'categories' => $categories,
        ]);
    }
    /**
     * @Route("client/livre/{id}", name="afficher_livre", methods={"GET"})
     */
    public function afficherLivre(Livre $livre): Response
    {
        $auteurs = $this->getDoctrine()->getRepository( Auteur::class)->findAll();
        $editeurs = $this->getDoctrine()->getRepository( Editeur::class)->findAll();
        $livres = $this->getDoctrine()->getRepository( Livre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository( Categorie::class)->findAll();
        return $this->render('home/livre.html.twig', [
            'auteurs' => $auteurs,
            'editeurs' => $editeurs,
            'livres' => $livres,
            'categories' => $categories,
            'livre' => $livre,
        ]);
    }
    /**
     * @Route("client/auteur/{id}", name="afficher_auteur", methods={"GET"})
     */
    public function afficherAuteur(Auteur $auteur): Response
    {
        $auteurs = $this->getDoctrine()->getRepository( Auteur::class)->findAll();
        $editeurs = $this->getDoctrine()->getRepository( Editeur::class)->findAll();
        $livres = $this->getDoctrine()->getRepository( Livre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository( Categorie::class)->findAll();
        return $this->render('home/auteur.html.twig', [
            'auteurs' => $auteurs,
            'editeurs' => $editeurs,
            'livres' => $livres,
            'categories' => $categories,
            'auteur' => $auteur,
        ]);
    }
    /**
     * @Route("client/categorie/{id}", name="afficher_categorie", methods={"GET"})
     */
    public function afficherCatégorie(Categorie $categorie): Response
    {
        $auteurs = $this->getDoctrine()->getRepository( Auteur::class)->findAll();
        $editeurs = $this->getDoctrine()->getRepository( Editeur::class)->findAll();
        $livres = $this->getDoctrine()->getRepository( Livre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository( Categorie::class)->findAll();
        return $this->render('home/categorie.html.twig', [
            'auteurs' => $auteurs,
            'editeurs' => $editeurs,
            'livres' => $livres,
            'categories' => $categories,
            'categorie' => $categorie,
        ]);
    }
    /**
     * @Route("client/editeur/{id}", name="afficher_editeur", methods={"GET"})
     */
    public function afficherEditeur(Editeur $editeur): Response
    {
        $auteurs = $this->getDoctrine()->getRepository( Auteur::class)->findAll();
        $editeurs = $this->getDoctrine()->getRepository( Editeur::class)->findAll();
        $livres = $this->getDoctrine()->getRepository( Livre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository( Categorie::class)->findAll();
        return $this->render('home/editeur.html.twig', [
            'auteurs' => $auteurs,
            'editeurs' => $editeurs,
            'livres' => $livres,
            'categories' => $categories,
            'editeur' => $editeur,
        ]);
    }
}
