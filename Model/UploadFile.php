<?php
class UploadFile{
    public static function upload($inputName, $target_dir){
        session_start();

        if(isset($_FILES[$inputName])) {
            $target_filename = basename($_FILES[$inputName]["name"]);
            $target_file = $target_dir . $target_filename;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_file)) {
                    return $target_filename;
                } else {
                    $_SESSION['error'] = "Une erreur s'est produite lors du téléchargement du fichier.";
                }
            }
        }
        return null;
    }
}
?>