<?php
namespace App\Controllers;
class Singer extends \CodeIgniter\Controller {
public function index() {
 // connect to the model  
    $singers = new \App\Models\Singers();  // retrieve all the records  
    $records = $singers->findAll();  // JSON encode and return the result  
    return json_encode($records); 
}
}

