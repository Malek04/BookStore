<?php
    class Author{

        private $id_author;
        private $name;
        private $image;
        private $about;

        public function get_id_author(){
            return $this->id_author;
        }
        public function get_name(){
            return $this->name;
        }
        public function get_image(){
            return $this->image;
        }
        public function get_about(){
            return $this->about;
        }

        public static function all(){
            $rq="select * from author";
            return DataBase::Query($rq,'Author');
        }

        public static function create($tab){
            $rq = "INSERT INTO `author` (`name`) VALUES (:name)";
            return DataBase::execute($rq,$tab);
        }

    }
?>