<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'Database Alcatraz');

    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    

    if(isset($_POST["objet"])){
        $choix_user = $_POST["objet"];
        if ($choix_user == 99){
        $query = "SELECT * FROM Objets";
        $result = mysqli_query($link, $query);
        if ($result = mysqli_query($link, $query)) {
        
            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
            }
        }
        else{
            // a renvoyer en json   
            echo "Erreur de requête de base de données.";
        }
        }
        else{
        $query = "SELECT * FROM Objets WHERE id =".$_POST["objet"];
        $result = mysqli_query($link, $query);
        $myArray = array();
        if ($result = mysqli_query($link, $query)) {
            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
            }
        }
        else{
            echo "Erreur de requête de base de données.";
        }
    }

    for ($i = 0; $i < sizeof($myArray); $i++) {

        $array_to_transform = $myArray[$i]['ID_perso_to_deblock'];//////////////////////////
        $myArray[$i]['ID_perso_to_deblock'] = str_split ($array_to_transform, 2) ;
        
    }
    }

    elseif(isset($_POST["perso"])){
        $choix_user = $_POST["perso"];
            if ($choix_user == 99){
                $query = "SELECT * FROM Personnages";
                $result = mysqli_query($link, $query);
                if ($result = mysqli_query($link, $query)) {
        
                    while($row = mysqli_fetch_assoc($result)) {
                    $myArray[] = $row;
                    }
                }
                else{
                    // a renvoyer en json   
                    echo "Erreur de requête de base de données.";
                }
            }
            else{
                $query = "SELECT * FROM Personnages WHERE id =".$_POST["perso"];
                $result = mysqli_query($link, $query);
                $myArray = array();

                if ($result = mysqli_query($link, $query)) {
        
                     while($row = mysqli_fetch_assoc($result)) {
                    $myArray[] = $row;
                    }
                }
                else{
                    // a renvoyer en json   
                    echo "Erreur de requête de base de données.";
                }
            }

            for ($i = 0; $i < sizeof($myArray); $i++) {

                $array_to_transform = $myArray[$i]['id_objet'];    /////////////////////////
                $myArray[$i]['id_objet'] = str_split ($array_to_transform, 2);
                
            }
        }
        
        

   

    echo json_encode($myArray, JSON_NUMERIC_CHECK);
?>