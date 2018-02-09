
<?php


$coordonne = array();


// Déclaration d'un tableau associatif
$coordonne = array(

    'nom' => 'Bacon',
    'prenom' => 'Terry',
    'age' => 24,
    'adresse' => '5 rue pavée',
    'code postale' =>'76100',
    'ville'=>'rouen',
    'Email'=>'terrybacon@gmail.com',
    'Téléphone'=>'07 68 03 53 79',
    'Date de naissance'=>'1993-12-10',

);
foreach ($coordonne as $key => $value) {
    echo ("<ul> 
             <li>".$key . ' ' . $value . "<br/ >\n"."</li>
            </ul>");

};





