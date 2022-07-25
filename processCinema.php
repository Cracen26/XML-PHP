<?php
if(isset($_POST['submit']))
{
    $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><films></films>");
    $film = $xml->addChild('film');   
    $film->addAttribute('id',$_POST['id']);
    $film->addAttribute('nom',$_POST['nom']);
    $film->addAttribute('genre',$_POST['genre']);
    $film->addAttribute('duree',$_POST['duree']);
    $film->addAttribute('realisateur',$_POST['realisateur']);
    $film->addAttribute('langue',$_POST['langue']);
    
    $film->addChild('annee',$_POST['annee']);
    $film->addChild('synopsis',$_POST['synopsis']);

    $projections = $film->addChild('projections');
    $projection = $projections->addChild('projection');
    $projection->addChild('horaire',$_POST['horaire']);
    $projection->addChild('jour',$_POST['jour']);

    $acteurs = $film->addChild('acteurs');
    $acteur = $acteurs->addChild('acteur',$_POST['acteur']);
    

    $asXML = $xml->asXML();
    $file = fopen("programmeGenerer.xml","w+");
    fwrite($file,$asXML);
    fclose($file); 
    print_r(error_get_last());

    if(file_exists('./data.xml'))
    {
        $myXML = file_get_contents('./data.xml');
        $xml = new SimpleXMLElement($myXML);
        $xmlpretty = $xml->asXML();

        echo "programme enregistre avec success";
        // pretty print the XML in browser
        // header('content-type: text/xml');
        // echo $xmlpretty;
    }

}
?>