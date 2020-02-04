<?php

namespace App\Controller;

use App\Entity\Mesures;
use App\Entity\User;
use App\Form\MesuresType;
use App\Repository\MesuresRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/mesures")
 */
class MesuresController extends AbstractController
{
    /**
     * @Route("/", name="mesures_index", methods={"GET"})
     */
    public function index(MesuresRepository $mesuresRepository, UserRepository $userRepository): Response
    {
        if ($this->getUser()){
            $userRepo = $userRepository->find($this->getUser());
            $mesures = $userRepo->getMesures();
        } else {
            $mesures = '';
        }
        return $this->render('mesures/index.html.twig', [
            'mesures' => $mesures,
        ]);
    }

    /**
     * @Route("/new", name="mesures_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mesure = new Mesures();
        $form = $this->createForm(MesuresType::class, $mesure);
        $form->handleRequest($request);
        var_dump(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $mesure->setCreatedAt(new \DateTime('now'));
            $mesure->setUser($this->getUser());
            $entityManager->persist($mesure);
            $entityManager->flush();

            return $this->redirectToRoute('mesures_index');
        }

        return $this->render('mesures/new.html.twig', [
            'mesure' => $mesure,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesures_show", methods={"GET"})
     */
    public function show(Mesures $mesure): Response
    {
        return $this->render('mesures/show.html.twig', [
            'mesure' => $mesure,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mesures_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Mesures $mesure): Response
    {
        $form = $this->createForm(MesuresType::class, $mesure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mesures_index');
        }

        return $this->render('mesures/edit.html.twig', [
            'mesure' => $mesure,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mesures_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Mesures $mesure): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mesure->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mesure);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mesures_index');
    }
}
