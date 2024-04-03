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

        public static function edit($id, $fname, $lname, $username, $pc, $tel, $email, $pwd) {
            $rq = "UPDATE user 
            SET fname = :fname,
                lname = :lname,
                username = :username,
                pc = :pc,
                tel = :tel,
                email = :email,
                pwd = :pwd
            WHERE id_user = :id
        ";
        $tab = array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':username' => $username,
            ':pc' => $pc,
            ':tel' => $tel,
            ':email' => $email,
            ':pwd' => $pwd,
            ':id' => $id
        );
            return DataBase::execute($rq, $tab);
        }
    
        public static function delete($id){
            $rq = "DELETE FROM `user` WHERE id_user = :id";
            $tab['id'] = $id;
            return DataBase::execute($rq, $tab);
        }

        public static function view($id){
            $rq = "SELECT * FROM user WHERE id_user = :id";
            $params = array(':id' => $id);
            return DataBase::Query($rq, 'User', $params);
        }
    }
?>