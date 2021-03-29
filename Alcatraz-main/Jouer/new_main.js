var mymap = L.map('mapid',{ zoomControl: false }).setView([37.826653, -122.422716], 18);//Premier argument : centrage, deuxieme argument : zoom

var titleStreets = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYW50b2luZS1vdmVyZmxvdyIsImEiOiJja2kxdmdkbWsxa3hiMnNsdDhlaDc3bXVjIn0.w8M_qz5w2RvlMd-8DWMyCQ'
    });
titleStreets.addTo(mymap);


console.log("everything gucci");

////////////////////// Decla des variables globales   ///////////////////////////////////

dinam_layer = new L.featureGroup();
liste_marker = [];
let etat_du_zoom; 
etat_du_zoom = 18;
let zoom_ou_non;
let forDeletion;
let taille_liste_marker;
let indice_objet_a_plot;
let indice_zoom_objet;
liste_marker_objets = [];
liste_marker_persos = [];
liste_min_max = [[]];
let indication_du_zeros = [];
var markersObject = {};
var liste_Temps_police = [];
let tmp_police = 0;
var liste_dette = [];
let dette = 0;
let deroule_jeu = 0; 
let minutes;
let secondes;
let blaze;

////////////////////// Fonction d'interaction du click sur un marker de type objet   //////////////////////////

function click_objet(e){

liste_Temps_police[0] = tmp_police;
liste_dette[0] = dette;
objectJavascript = document.getElementById(blaze).className='icones2';


nom_objet_click = e.target.options.title;
        console.log('nom_objet_click');
        console.log(nom_objet_click);
    indice_objet_click = e.target._leaflet_id;
                    console.log('indice objet click');
                    console.log(indice_objet_click);

                    console.log('liste marker into click objet');
                    console.log(liste_marker);
                    console.log('liste marker objets into click objet');
                    console.log(liste_marker_objets);
                    console.log('liste marker persos into click objet');
                    console.log(liste_marker_persos);

    console.log('deroule_jeu');
    console.log(deroule_jeu);
    /// envoyer la page de fin ///////////
    if(nom_objet_click == "Banque"){
        deroule_jeu = 1;
        console.log('deroule_jeu');
        console.log(deroule_jeu);
    }

    if(deroule_jeu == 1){


        temps_final = String(minutes).bold() + " min et " + String(secondes).bold() + " sec d'avance sur la police ";
        butin_final = "$" + String(bounty).bold() 
                console.log('temps et butin');
                console.log(temps_final);
                console.log(butin_final);
                
        window.open(
            "page_victoire.php?temps_uti="+temps_final+"&butin_uti="+butin_final,
            "location=0,menubar=0,status=0,scrollbars=0,menubar=0,top=100,left=100,width=1000,height=550"
        );
    
    }

    // reglage beug contrat
    if(nom_objet_click == "Contrat"){
        dinam_layer.clearLayers();
        intera_BDD("perso", 10);
    }

    if( indice_perso_suivant_max != indice_perso_suivant_min){
        length_liste_indices = (indice_perso_suivant_max - indice_perso_suivant_min) + 1 ;
        console.log('type1_taille liste');
        } 
    else{
            length_liste_indices = 1;
            console.log('type2_taille liste');
        }

     

    taille_liste_marker = liste_marker.length;
    taille_liste_marker_persos = liste_marker_persos.length;
    taille_liste_marker_objets = liste_marker_objets.length;
    liste_marker = [];
    liste_marker_objets =[];
    liste_marker_persos = [];
    



    if (taille_liste_marker_objets == 2){
        console.log('type 1');
        dinam_layer.clearLayers();
        
        
        if( zoom_ou_non == 1){
            console.log(zoom_ou_non);
            etat_du_zoom = etat_du_zoom - indice_zoom_objet;
            intera_BDD("objet", markersObject[indice_objet_click]);
        }
        else{
            intera_BDD("objet", markersObject[indice_objet_click]);
        }
        
    }
    else if (taille_liste_marker_persos == 2){

        etat_du_zoom = etat_du_zoom - indice_zoom_objet;
        console.log('type 2');
        dinam_layer.clearLayers();
        for (var i = 0;  i< length_liste_indices; i++){
            try {     
                
                indice_objet_a_plot = indice_perso_suivant_min + i;
                intera_BDD("perso", indice_objet_a_plot);

        } catch (e) {
            // exit the loop
            break; 
          }
        }
    }
    else if (taille_liste_marker_persos == 1 || taille_liste_marker_objets == 1){
        etat_du_zoom = etat_du_zoom - indice_zoom_objet;
        console.log('type 3');
        dinam_layer.clearLayers();
        for (var i = 0;  i< length_liste_indices; i++){
            try {
            // code that throws the error
            indice_perso_a_plot = indice_perso_suivant_min + i;
            intera_BDD("perso", indice_perso_a_plot);
        } catch (e) {
            // exit the loop
            break; 
          }
        }
    }
    
    }



////////////////////// Fonction d'interaction du click sur un marker de type perso   //////////////////////////



function click_perso(e){



    if( indice_objet_suivant_max != indice_objet_suivant_min){
    length_liste_indices = (indice_objet_suivant_max - indice_objet_suivant_min) + 1;
                    console.log('type1');
                    for (var i = 0;  i < length_liste_indices; i++){

                        console.log('//////////////// tour de boucle //////////');
                        //for(var t = 0; i< )
                            try {
                            // code that throws the error

                            indice_objet_a_plot = (indice_objet_suivant_max-i);
                            intera_BDD("objet", indice_objet_a_plot );
                        } catch (e) {
                            // exit the loop
                            break; 
                        }
                        }
    } 
    else{
                    console.log('type2');
        indice_perso_click = e.target._leaflet_id;
                    
        indice_next_objet = markersObject[indice_perso_click];
                    
        intera_BDD("objet",  indice_next_objet);
        
        }
        liste_min_max =[];

    }
    

    

    


///////////////////////  Fonction de chargement des données depuis la BDD     /////////////////////////////////////


function intera_BDD(type, id){    
    //Requête Ajax sur le fichier PHP 
    var condition = type + "=" + id;
    fetch('docu_unique.php', {
      method: 'post',
      body: condition,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'}
     })
      .then(result => result.json())
      .then(result => {
        console.log("vue");
        console.log(result);


        
        indication_du_zeros = 0;
        for (var i = 0; i < result.length; i++){
            
            id_element = result[i].id
                            
                if (id_element < 3){
                    mymap.setView([37.826653, -122.422716], etat_du_zoom);
                }
                else{
                    mymap.setView([result[i].coord_x, result[i].coord_y], etat_du_zoom);
                }

                var name = result[i].Nom;
                let oIcon = L.icon({
                  iconUrl: result[i].Lien_Image,
                  iconSize: [result[i].size_x, result[i].size_y]
                });
                var message = result[i].Message;
                var marker = new L.Marker([result[i].coord_x, result[i].coord_y], {
                    icon: oIcon,
                    title: name
                });
                


            if ( type == "objet"){

                    tmp_police = result[0].Temps_police;
                    dette = result[0].Prix;
                    blaze = result[0].Nom;

                
                    let content;
                    var scrolling = result[i].Nb_scroll.toString();

                    content = "<h2>" + name + "</h2>" + "<p>" + message + ' ' + scrolling.bold()  + " fois!</p>";

                    marker.on('mousemove', function(e){
                    e.target.bindPopup(content).openPopup();
                        }).on('mouseout', function(e){
                    e.target.bindPopup(content).closePopup();
                        });

                    var liste_perso_suivant = result[i].ID_perso_to_deblock;
                                    
                    
                    indice_perso_suivant_max = Math.max.apply(Math, liste_perso_suivant); 
                    indice_perso_suivant_min = Math.min.apply(Math, liste_perso_suivant);
                                   
                    zoom_ou_non = result[i].Visibility;
                    
                    len_liste_perso_suivant = liste_perso_suivant.length;
                    
                    //indice_perso_suivant = result[i].ID_proprio;
                    indice_zoom_objet = result[i].Nb_scroll;

                        
                    
                    marker.on('click', click_objet);
                    liste_marker_objets.push(marker);
            }
                    
            

            if (type == "perso"){

                
                let content;
                var argent = result[i].Dette.toString();

                    // message different pour le premier element
                    if(id == 1){
                        content = "<h2>" + name + "</h2>" + "<p>" + message + "</p>";
                    }
                    else{
                        content = "<h2>" + name + "</h2>" + "<p>" + message + "$" + argent.bold() + " Dollars </p>";
                    }
                    
                    // popup w/ message
                    marker.on('mousemove', function(e){
                    e.target.bindPopup(content).openPopup();
                        }).on('mouseout', function(e){
                    e.target.bindPopup(content).closePopup();
                        });

                        
                    //recup objets associés au perso
                    var indice_objet_suivant = result[i].id_objet;
                                
                                
                    
                    indice_objet_suivant_max = Math.max.apply(Math, indice_objet_suivant); 
                    indice_objet_suivant_min = Math.min.apply(Math, indice_objet_suivant);
                            
                    lenght_liste_indices_suivants = indice_objet_suivant.length;
                    zoom_ou_non_perso = result[i].Visibility;  

                    
                    if(lenght_liste_indices_suivants == 1){
                        liste_min_max.push(indice_objet_suivant_min);
                            
                        
                        liste_min_max_max = Math.max.apply(Math, liste_min_max);
                        liste_min_max_min = Math.min.apply(Math, liste_min_max);

                    
                    } 
                    
                    marker.on('click', click_perso);
                    liste_marker_persos.push(marker);
                }
                

                // setup for the markers list 
            liste_marker.push(marker);
                
                // add each individual marker present in the list to the featuregroup dinam_layer
                                    
            for(var indice_liste = 0; indice_liste < liste_marker.length; indice_liste ++){
                console.log('liste des markers boucle');
                console.log(liste_marker[indice_liste]);
                dinam_layer.addLayer(liste_marker[indice_liste]);
            }

            console.log('marker leaflet id');
            console.log(marker._leaflet_id);
            if (type == "perso"){
                markersObject[marker._leaflet_id] = result[i].id_objet;
            }
            else{
                markersObject[marker._leaflet_id] = result[i].ID_perso_to_deblock;
            }
            console.log('markersObject');
            console.log(markersObject);

            
            

            
        }
       
      })
}

/////////////////////////// Fonction supplementaire //////////////////////////

//// mise en place d'un popup si le user click sur la carte avec les coords du click 
var popup = L.popup();
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}


// Chronomètre
var countDown = 60;
var x = setInterval(function() {
  if(liste_Temps_police.length != 0){
    countDown += Number(liste_Temps_police[0]);
    liste_Temps_police[0]=0;
  }
  countDown--;
  // Conversion en minutes/secondes
minutes = Math.floor(countDown % (60 * 60) / 60);
secondes = Math.floor(countDown % 60);

  document.getElementById("chrono").innerHTML = String(minutes).bold() + " min et " + String(secondes).bold() + " sec d'avance sur la police";
  if (countDown <=0 ){
    document.getElementById("chrono").innerHTML = "La police vous a rattrapé";
  }
  if (countDown < -2) {
    clearInterval(x);
    document.getElementById("chrono").innerHTML = "La police vous a rattrapé";
    window.open("defaite.php", name="_self", menubar = "no", scrollbar = "no", titlebar = "no");
  }
}, 1000);




// Butin
var bounty = 250000;
var x = setInterval(function() {
  if(liste_dette.length != 0){
    bounty -= Number(liste_dette[0]);
    liste_dette[0]=0;
  }
  document.getElementById("butin").innerHTML = "$" + String(bounty).bold() + " disponibles"
}, 1000);




/////////////////////// Main ///////////////////

//lancement du programme 
mymap.on('click', onMapClick);
dinam_layer.addTo(mymap);
intera_BDD("perso", 1);




