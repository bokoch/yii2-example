<?php

use yii\db\Migration;

/**
 * Class m180130_224309_create_book_shop
 */
class m180130_224309_create_book_shop extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createPublishers();
        $this->createBooks();
        $this->createAuthors();
        $this->createBooksToAuthors();

    }

    public function down()
    {
        $this->dropTable('book');
        $this->dropTable('author');
        $this->dropTable('book_to_author');
        $this->dropTable('author');
    }

    private function createBooks()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'isbn' => $this->string(),
            'date_published' => $this->date(),
            'publisher_id' => $this->integer()
        ]);

        $this->createIndex(
            'idx-book-publisher_id',
            'book',
            'publisher_id'
        );
        $this->addForeignKey(
            'fk-book-publisher_id',
            'book',
            'publisher_id',
            'publisher',
            'id',
            'CASCADE'
        );
    }

    private function createPublishers()
    {
        $this->createTable('publisher', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'date_registered' => $this->date(),
            'identity_number' => $this->integer(),
        ]);
    }

    private function createBooksToAuthors()
    {
        $this->createTable('book_to_author', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer(),
        ]);


        $this->createIndex(
            'idx-book_to_author-book_id',
            'book_to_author',
            'book_id'
        );
        $this->addForeignKey(
            'fk-book_to_author-book_id',
            'book_to_author',
            'book_id',
            'book',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-book_to_author-author_id',
            'book_to_author',
            'author_id'
        );
        $this->addForeignKey(
            'fk-book_to_author-author_id',
            'book_to_author',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );
    }

    private function createAuthors()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->date(),
            'rating' => $this->integer(),
        ]);
    }

}
