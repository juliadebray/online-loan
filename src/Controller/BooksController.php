<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BooksType;
use App\Repository\BooksRepository;
use App\Service\BookService;
use App\Service\FileUploader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/books")
 */
class BooksController extends AbstractController
{
    /**
     * Display the catalog of books
     *
     * @param BooksRepository $booksRepository
     * @return Response
     * @Route ("/catalog", name="catalog", methods={"GET"}),
     */
    public function displayBookCatalog(BooksRepository $booksRepository): Response
    {
        $identifieddUser = $this->getUser();
        if(!isset($identifieddUser))
        {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('books/booksCatalog.html.twig', [
            'books' => $booksRepository->findAll(),
        ]);
    }

    /**
     * search a book in the catalog by his type or by his type and his title
     *
     * @param BooksRepository $booksRepository
     * @return Response
     * @Route ("/search/{type}/{title?}", name="books_search", methods={"GET"}),
     */
    public function search(BooksRepository $booksRepository, string $type, ?string $title): Response
    {
        $books = $booksRepository->likeBy($title, $type);

        return $this->render('books/booksCatalog.html.twig', ['books' => $books]);
    }

    /**
     * search a book in the catalog by his title
     *
     * @param BooksRepository $booksRepository
     * @return Response
     * @Route ("/searchByTitle/{title}", name="books_search_by_title", methods={"GET"}),
     */
    public function searchByTitle(BooksRepository $booksRepository, string $title): Response
    {
        $type = null;
        $books = $booksRepository->likeBy($title, $type);
        return $this->render('books/booksCatalog.html.twig', ['books' => $books]);
    }

    /**
     * Add a book to the catalog
     *
     * @IsGranted("ROLE_EMPLOYEE")
     * @param Request $request
     * @return Response
     * @Route("/new", name="books_new", methods={"GET","POST"}),
     */
    public function new(Request $request, FileUploader $fileUploader, BookService $bookService): Response
    {
        $book = new Books();
        $form = $this->createForm(BooksType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $bookService->makeBook($fileUploader, $form, $book);

            return $this->redirectToRoute('books_new');
        }

        return $this->renderForm('books/new.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }
}
