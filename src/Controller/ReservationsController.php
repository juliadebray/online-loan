<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Repository\BooksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservations")
 */
class ReservationsController extends AbstractController
{
    /**
     * Allow a user to reserve a book
     *
     * @Route("/{bookId}", name="book_reservation", methods={"GET","POST"}),
     */
    public function new(BooksRepository $booksRepository, int $bookId): Response
    {
        $book = $booksRepository->find($bookId);
        $startDate = new \DateTime('now');
        $endDate = $startDate->modify('+3 day');

        $reservation = new Reservations();
        $reservation->setBook($book);
        $reservation->setUser($this->getUser());
        $reservation->setStartDate($startDate);
        $reservation->setEndDate($endDate);
        $reservation->setStatus('reserved');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush();

        $book->setStatus('reserved');
        $entityManager->flush();

        return $this->redirectToRoute('books_catalog');
    }

    /**
     * Confirm the loan of a book
     *
     * @param BooksRepository $booksRepository
     * @param int $bookId
     * @Route("/edit/{bookId}", name="book_loaning", methods={"GET","POST"})
     */
    public function setLoaning(BooksRepository $booksRepository, int $bookId)
    {
        $book = $booksRepository->find($bookId);
        $reservation = $book->getReservation();

        $startDate = new \DateTime('now');
        $endDate = $startDate->modify('+21 day');

        $reservation->setStatus('borrowed');
        $reservation->setStartDate($startDate);
        $reservation->setEndDate($endDate);

        $this->getDoctrine()->getManager()->flush();

        $book->setStatus('borrowed');
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('books_catalog');
    }
}