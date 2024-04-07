<?php
    class Book{

        private $id_book;
        private $id_genre;
        private $id_author;
        private $title;
        private $length;
        private $language;
        private $publisher;
        private $price;
        private $image;
        private $description;
        private $qte;

        public function get_id_book(){
            return $this->id_book;
        }

        public function get_id_genre(){
            return $this->id_genre;
        }

        public function get_id_author(){
            return $this->id_author;
        }

        public function get_title(){
            return $this->title;
        }

        public function get_length(){
            return $this->length;
        }

        public function get_language(){
            return $this->language;
        }

        public function get_publisher(){
            return $this->publisher;
        }

        public function get_price(){
            return $this->price;
        }

        public function get_image(){
            return $this->image;
        }

        public function get_description(){
            return $this->description;
        }

        public function get_qte(){
            return $this->qte;
        }

        public static function all(){
            $rq="select * from book";
            return DataBase::Query($rq,'Book');
        }
        
        public static function create($tab){
            $rq = "INSERT INTO `book`(`id_genre`, `id_author`, `title`, `length`, `language`, `publisher`, `price`, `image`, `description`, `qte`) VALUES (:id_genre,:id_author,:title,:length,:language,:publisher,:price,:image,:description,:qte)";
            return DataBase::execute($rq, $tab);
        }       
        
        public static function edit($id_book, $id_genre, $id_author, $title, $length, $language, $price, $image, $description, $qte) {
            $rq = "UPDATE book 
                    SET id_genre = :id_genre,
                        id_author = :id_author,
                        title = :title,
                        length = :length,
                        language = :language,
                        price = :price,
                        image = :image,
                        description = :description,
                        qte = :qte
                    WHERE id_book = :id_book";
            $tab = array(
                ':id_genre' => $id_genre,
                ':id_author' => $id_author,
                ':title' => $title,
                ':length' => $length,
                ':language' => $language,
                ':price' => $price,
                ':image' => $image,
                ':description' => $description,
                ':qte' => $qte,
                ':id_book' => $id_book,
            );
            return DataBase::execute($rq, $tab);
        }
        
        public static function delete($id){
            $rq = "DELETE FROM `book` WHERE id_book = :id";
            $tab['id'] = $id;
            return DataBase::execute($rq, $tab);
        }
        
        public static function view($id){
            $rq = "SELECT * FROM book WHERE id_book = :id";
            $params = array(':id' => $id);
            return DataBase::Query($rq, 'Book', $params);
        }

    
    }
?>