<?php
    class Comment{

        private $id_comment;
        private $fname;
        private $lname;
        private $email;
        private $message;

        public function get_id_comment(){
            return $this->id_comment;
        }

        public function get_fname(){
            return $this->fname;
        }

        public function get_lname(){
            return $this->lname;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_message(){
            return $this->message;
        }

        public static function all(){
            $rq="select * from comments";
            return DataBase::Query($rq,'Comment');
        }
    
        public static function create($tab){
            $rq = "INSERT INTO `comments` (`fname`, `lname`, `email`, `message`) VALUES (:fname, :lname, :email, :message)";
            return DataBase::execute($rq, $tab);
        }
        
    }
?>