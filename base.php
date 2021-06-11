<?php

echo "COUCOU JE SUIS LOGIQUE";

// variables criteres d'autorisation d'upload (copie dans le bon repertoire)


$extensionsAutorisees = array("jpeg", "jpg", "png");

$hauteurMax = 720;
$largeurMax = 900;

$tailleMax = 1;

// trouver un moyen d'obtenir ces informations concernant le fichier envoyé
//et accepter la copie selon le respect de nos variables criteres


// depuis $_FILES
// recuperer le nom original du fichier
//et le nom temporaire attribué par php à ce meme fichier

// l'upload lui-meme est une methode séparée     ->  move_uploaded_file

// a besoin d'une adresse de destination   -> il s'agit du repertoire
// + du nom qui doit etre attribué au fichier

// du nom temporaire du fichier à uploader







if( isset($_POST['inputTest']) && $_POST['inputTest'] == 'valeurTest'){

    echo "BIEN DETECTE L'ENVOI DE FORMULAIRE";

    if (    isset($_FILES['fichierEnvoye']['name']   )        ){
        echo "<br>";
        var_dump($_FILES['fichierEnvoye']['name'] );
        echo "<br>";
        echo "<br>";
        var_dump($_FILES['fichierEnvoye']['tmp_name'] );
        echo "<br>";



        $repertoireUpload = "";
        $nomFinalDuFichier = $_FILES['fichierEnvoye']['name'];

        $destinationFinale = $repertoireUpload.$nomFinalDuFichier;
        $nomTemporaireFichier = $_FILES['fichierEnvoye']['tmp_name'];

        //appeler la methode pour déplacer le fichier depuis le cache jusqu'à sa destination finale


        if(move_uploaded_file($nomTemporaireFichier, $destinationFinale)){

            echo "UPLOAD SUCCESSFUL";
        }else{

            echo "YOU FAILED";
        }






    }






}






?>