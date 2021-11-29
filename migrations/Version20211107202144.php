<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211107202144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        /**
         * admin id : admin@admin.fr / pwd : admin
         */
        $this->addSql('INSERT INTO users(id, email, roles, password, status, type) 
        VALUES ("1", "admin@admin.fr", "[\"ROLE_ADMIN\"]", "$2y$13$6isO0d6TewmVC01CgmvM5uCKF9XXTRaWfU5SF9VFwJjxzBsP2V0zK", "validated", "administrator")');
        $this->addSql('INSERT INTO administrators(id) VALUES ("1")');

        /**
         * employee id : employee@employee.fr / pwd : employee
         */
        $this->addSql('INSERT INTO users(id, email, roles, password, status, type) 
        VALUES ("2", "employee@employee.fr", "[\"ROLE_EMPLOYEE\"]", "$2y$13$mfzkk7TMhOzFc.doTbAuH.jn2BQbq9m/zFM3gVj4aFYVcnT/TRIee", "validated", "employee")');
        $this->addSql('INSERT INTO employees(id) VALUES ("2")');

        /**
         * consumer id : customer@customer.fr / pwd : customer
         */
        $this->addSql('INSERT INTO users(id, email, roles, password, status, type) VALUES ("3", "customer@customer.fr", "[\"ROLE_CUSTOMER\"]", "$2y$13$IxoTzpZCs/mCEug1cb5sced5V1.Y1HYtbMxGQ9mzTNKZvWjiepl7i", "validated", "customer")');
        $this->addSql('INSERT INTO customers(id, firstname,  lastname, birthdate, address, zipcode, city) VALUES ("3", "John", "Doe", "1980-10-19", "120 rue des Rosiers", "44000", "NANTES")');

        /**
         * books
         */
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("1", "Charles Baudelaire", "Les fleurs du Mal", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Poésie", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("2", "Corneille", "Le Cid", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Théâtre", "1850-07-22")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("3", "Choderlos de Laclos", "Les liaisons dangereuses", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1782-02-02")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("4", "Honoré de Balzac", "Le père Goriot", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1835-05-10")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("5", "Alexandre Dumas", "Le comte de Monte Cristo", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("6", "Victor Hugo", "Les Misérables", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("7", "Emile Zola", "Nana", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("8", "Marcel Proust", "A la recherche du temps perdu", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("9", "Colette", "Le blé en herbe", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("10", "Louis Ferdinand Céline", "Voyage au bout de la nuit", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "2000-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("11", "Marcel Pagnol", "La gloire de mon père", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1890-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("12", "Charles Baudelaire", "Les fleurs du Mal", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Poésie", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("13", "Choderlos de Laclos", "Les liaisons dangereuses", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1782-02-02")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("14", "Honoré de Balzac", "Le père Goriot", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1835-05-10")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("15", "Alexandre Dumas", "Le comte de Monte Cristo", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("16", "Victor Hugo", "Les Misérables", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("17", "Emile Zola", "Nana", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("18", "Marcel Proust", "A la recherche du temps perdu", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("19", "Colette", "Le blé en herbe", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("20", "Louis Ferdinand Céline", "Voyage au bout de la nuit", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "2000-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("21", "Marcel Pagnol", "La gloire de mon père", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1890-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("22", "Simone de Beauvoir", "La vieillesse", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Essai", "1970-11-11")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("23", "Choderlos de Laclos", "Les liaisons dangereuses", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1782-02-02")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("24", "Honoré de Balzac", "Le père Goriot", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1835-05-10")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("25", "Alexandre Dumas", "Le comte de Monte Cristo", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("26", "Victor Hugo", "Les Misérables", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("27", "Emile Zola", "Nana", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("28", "Marcel Proust", "A la recherche du temps perdu", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("29", "Colette", "Le blé en herbe", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("30", "Louis Ferdinand Céline", "Voyage au bout de la nuit", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "2000-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("31", "Marcel Pagnol", "La gloire de mon père", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1890-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("32", "Simone de Beauvoir", "La vieillesse", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Essai", "1970-11-11")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("33", "Choderlos de Laclos", "Les liaisons dangereuses", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1782-02-02")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("34", "Honoré de Balzac", "Le père Goriot", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1835-05-10")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("35", "Alexandre Dumas", "Le comte de Monte Cristo", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Polar", "1857-06-21")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("36", "Victor Hugo", "Les Misérables", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Polar", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("37", "Emile Zola", "Nana", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Polar", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("38", "Marcel Proust", "A la recherche du temps perdu", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Polar", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("39", "Colette", "Le blé en herbe", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "1862-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("40", "Louis Ferdinand Céline", "Voyage au bout de la nuit", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Fantastique", "2000-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("41", "Marcel Pagnol", "La gloire de mon père", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Littérature", "1890-02-19")');
        $this->addSql('INSERT INTO books(id, author, title, image, description, literary_genre, release_date) VALUES ("42", "Simone de Beauvoir", "La vieillesse", "default_cover.jpg", "Un très beau livre qui vaut le détour !", "Essai", "1970-11-11")');

        /**
         * Reservations
         */
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("1", "3", "1", "2021-10-01 19:10:31", "2021-10-22 19:10:31", "borrowed")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("2", "3", "2", "2021-10-01 19:10:31", "2021-10-22 19:10:31", "borrowed")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("3", "3", "5", "2021-10-01 19:10:31", "2021-10-22 19:10:31", "borrowed")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("4", "3", "10", "2021-10-01 19:10:31", "2021-10-22 19:10:31", "borrowed")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("5", "3", "12", "2021-10-01 19:10:31", "2021-10-04 19:10:31", "reserved")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("6", "3", "21", "2021-10-01 19:10:31", "2021-10-04 19:10:31", "reserved")');
        $this->addSql('INSERT INTO reservations(id, user_id, book_id, start_date, end_date, status) VALUES ("7", "3", "9", "2021-10-01 19:10:31", "2021-10-04 19:10:31", "reserved")');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}