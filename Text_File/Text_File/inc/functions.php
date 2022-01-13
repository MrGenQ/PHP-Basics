<?php
$validationErrors = [];
function saveMessage($data){
    $file = 'data/messages.txt';
    $content = file_get_contents($file);
    $formData = implode(',', $data); //konvertuojam masyva i stringa
    $content .=$formData ."/n";
    file_put_contents($file, $content);
}
function getData(){
    $messages = file_get_contents('data/messages.txt');
    $messages = explode('/n', $messages); //konvertuojam i masyva is stringo
    return $messages;
}
function validate($data){
    global $validationErrors;
    if(empty($data['name']) && !preg_match("/^[a-zA-Z'\S]/", $data['name'])){
        $validationErrors[]="neįvestes arba neteisingai ivestass vardas";
    }
    if(empty($data['lname']) && !preg_match('/^[a-zA-Z+\S]/', $data['lname'])){
        $validationErrors[]="neįvestes arba neteisingai ivestas pavarde";
    }
    if(empty($data['message']) && !preg_match('/^[A-Za-z0-9]{1,200}$/', $data['message'])){
        $validationErrors[]="Per ilga zinutė";
    }
    if(empty($data['email']) && !preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$data['email']))
    { $validationErrors[]="Neteisingas email";}
    if(empty($data['department']) && !preg_match("/^[A-Za-z]/",$data['departament']))
    { $validationErrors[]="Nepasirinktas departamentas";}
    return $validationErrors;
}