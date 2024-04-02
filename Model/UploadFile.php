<?php
class UploadFile{
    public static function upload($inputName,$target_dir){
        $target_filename=basename($_FILES[$inputName]["name"]);
        $target_file = $target_dir . basename($_FILES[$inputName]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_FILES[$inputName])) {
            $check = getimagesize($_FILES[$inputName]["tmp_name"]);
            if($check !== false) {
               $uploadOk = 1;
            } else {
                $_SESSION['error']="Le fichier n'est pas une image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $_SESSION['error']="Oops le fichier existe déjà.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES[$inputName]["size"] > 500000) {
            $_SESSION['error']="Le fichier est trop grand.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $_SESSION['error']="Ops on n'accepte que ces types: JPG, JPEG, PNG & GIF .";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_file)) {
                return $target_filename;
            } else {
                $_SESSION['error']="Une erreur s'est produite lors du téléchargement du fichier.";
            }
        }
    }
}