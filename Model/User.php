<?php
    class User{

        private $id_user;
        private $fname;
        private $lname;
        private $username;
        private $pc;//postal code
        private $tel;
        private $email;
        private $pwd;

        public function get_id_user(){
            return $this->id_user;
        }

        public function get_fname(){
            return $this->fname;
        }

        public function get_lname(){
            return $this->lname;
        }

        public function get_username(){
            return $this->username;
        }

        public function get_pc(){
            return $this->pc;
        }

        public function get_tel(){
            return $this->tel;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_pwd(){
            return $this->pwd;
        }

        public static function all(){
            $rq="select * from user";
            return DataBase::Query($rq,'User');
        }

    }
?>