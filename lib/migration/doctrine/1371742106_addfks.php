<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addfks extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('books', 'books_books_category_id_books_category_books_category_id', array(
             'name' => 'books_books_category_id_books_category_books_category_id',
             'local' => 'books_category_id',
             'foreign' => 'books_category_id',
             'foreignTable' => 'books_category',
             ));
        $this->createForeignKey('books_category', 'bbbb_1', array(
             'name' => 'bbbb_1',
             'local' => 'big_books_category_id',
             'foreign' => 'big_books_category_id',
             'foreignTable' => 'big_books_category',
             ));
        $this->createForeignKey('client_books_advertisment', 'caaa', array(
             'name' => 'caaa',
             'local' => 'advertisment_id',
             'foreign' => 'advertisment_id',
             'foreignTable' => 'advertisment',
             ));
        $this->createForeignKey('client_books_advertisment', 'client_books_advertisment_book_id_books_book_id', array(
             'name' => 'client_books_advertisment_book_id_books_book_id',
             'local' => 'book_id',
             'foreign' => 'book_id',
             'foreignTable' => 'books',
             ));
        $this->createForeignKey('client_books_advertisment', 'client_books_advertisment_orders_id_ordered_orders_id', array(
             'name' => 'client_books_advertisment_orders_id_ordered_orders_id',
             'local' => 'orders_id',
             'foreign' => 'orders_id',
             'foreignTable' => 'ordered',
             ));
        $this->createForeignKey('client_books_advertisment', 'cuuu', array(
             'name' => 'cuuu',
             'local' => 'user_category_id',
             'foreign' => 'user_category_id',
             'foreignTable' => 'user_category',
             ));
        $this->createForeignKey('order_detail', 'order_detail_orders_id_ordered_orders_id', array(
             'name' => 'order_detail_orders_id_ordered_orders_id',
             'local' => 'orders_id',
             'foreign' => 'orders_id',
             'foreignTable' => 'ordered',
             ));
        $this->createForeignKey('promotion', 'promotion_book_id_books_book_id', array(
             'name' => 'promotion_book_id_books_book_id',
             'local' => 'book_id',
             'foreign' => 'book_id',
             'foreignTable' => 'books',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('user', 'user_user_category_id_user_category_user_category_id', array(
             'name' => 'user_user_category_id_user_category_user_category_id',
             'local' => 'user_category_id',
             'foreign' => 'user_category_id',
             'foreignTable' => 'user_category',
             ));
    }

    public function down()
    {
        $this->dropForeignKey('books', 'books_books_category_id_books_category_books_category_id');
        $this->dropForeignKey('books_category', 'bbbb_1');
        $this->dropForeignKey('client_books_advertisment', 'caaa');
        $this->dropForeignKey('client_books_advertisment', 'client_books_advertisment_book_id_books_book_id');
        $this->dropForeignKey('client_books_advertisment', 'client_books_advertisment_orders_id_ordered_orders_id');
        $this->dropForeignKey('client_books_advertisment', 'cuuu');
        $this->dropForeignKey('order_detail', 'order_detail_orders_id_ordered_orders_id');
        $this->dropForeignKey('promotion', 'promotion_book_id_books_book_id');
        $this->dropForeignKey('user', 'user_user_category_id_user_category_user_category_id');
    }
}