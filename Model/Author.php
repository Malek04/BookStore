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
            $rq = "INSERT INTO `author` (`name`,`image`,`about`) VALUES (:name,:image,:about)";
            return DataBase::execute($rq,$tab);
        }

        public static function edit($id, $name, $image, $about) {
            $rq = "UPDATE author 
                    SET name = :name,
                        image = :image,
                        about = :about
                    WHERE id_author = :id";
            $tab = array(
                ':name' => $name,
                ':image' => $image,
                ':about' => $about,
                ':id' => $id,
            );
            return DataBase::execute($rq, $tab);
        }
        
        public static function delete($id){
            $rq = "DELETE FROM `author` WHERE id_author = :id";
            $tab['id'] = $id;
            return DataBase::execute($rq, $tab);
        }

        public static function view($id){
            $rq = "SELECT * FROM author WHERE id_author = :id";
            $params = array(':id' => $id);
            return DataBase::Query($rq, 'Author', $params);
        }
    
    }
?>