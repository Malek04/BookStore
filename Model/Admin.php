<?php
class Admin{

    private $id_admin;
    private $fname;
    private $lname;
    private $admin_name; // Changed from $username to $admin_name
    private $pc; // Changed from $pc to $postal_code
    private $tel;
    private $email;
    private $pwd;

    public function get_id_admin(){
        return $this->id_admin;
    }

    public function get_fname(){
        return $this->fname;
    }

    public function get_lname(){
        return $this->lname;
    }

    public function get_admin_name(){
        return $this->admin_name;
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
        $rq="select * from admin";
        return DataBase::Query($rq,'Admin');
    }

    public static function create($tab){
        $rq = "INSERT INTO `admin` (`fname`,`lname`,`admin_name`,`pc`,`tel`,`email`,`pwd`)
        VALUES (:fname,:lname,:admin_name,:pc,:tel,:email,:pwd)";
        return DataBase::execute($rq,$tab);
    }
    
    public static function edit($id,$fname, $lname, $admin_name, $pc, $tel, $email, $pwd) {
        $rq ="  UPDATE admin 
                SET fname = :fname,
                    lname = :lname,
                    admin_name = :admin_name,
                    pc = :pc,
                    tel = :tel,
                    email = :email,
                    pwd = :pwd
                WHERE id_admin = :id";
        $tab = array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':admin_name' => $admin_name,
            ':pc' => $pc,
            ':tel' => $tel,
            ':email' => $email,
            ':pwd' => $pwd,
            ':id' => $id
        );
        return DataBase::execute($rq, $tab);
    }
    
    public static function delete($id){
        $rq = "DELETE FROM `admin` WHERE id_admin = :id";
        $tab['id'] = $id;
        return DataBase::execute($rq, $tab);
    }

    public static function view($id){
        $rq = "SELECT * FROM admin WHERE id_admin = :id";
        $params = array(':id' => $id);
        return DataBase::Query($rq, 'Admin', $params);
    }
}
?>
