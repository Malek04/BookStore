<?php
    class Genre{

        private $id_genre;
        private $genre;

        public function get_id_genre(){
            return $this->id_genre;
        }

        public function get_genre(){
            return $this->genre;
        }

        public static function all(){
            $rq="select * from genre";
            return DataBase::Query($rq,'Genre');
        }

        public static function create($tab){
            $rq = "INSERT INTO `genre` (`genre`) VALUES (:genre)";
            return DataBase::execute($rq,$tab);
        }

        public static function edit($id,$genre) {
            $rq ="  UPDATE genre 
                    SET genre = :genre
                    WHERE id_genre = :id";
            $tab = array(
                ':genre' => $genre,
                ':id' => $id
            );
            return DataBase::execute($rq, $tab);
        }

        public static function delete($id){
            $rq = "DELETE FROM `genre` WHERE id_genre = :id";
            $tab['id'] = $id;
            return DataBase::execute($rq, $tab);
        }

        public static function view($id){
            $rq = "SELECT * FROM genre WHERE id_genre = :id";
            $params = array(':id' => $id);
            return DataBase::Query($rq, 'Genre', $params);
        }

    }
?>