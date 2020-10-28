<?php
namespace App\Controllers;
class Sing extends BaseController {
public function index() { 
    
    // connect to the model
    $singers = new \App\Models\Singers(); // retrieve all the records 
    $records = $singers->findAll();
    // get a template parser
    $parser = \Config\Services::parser(); // tell it about the substitions
    return $parser->setData(['records' => $records])  
// and have it render the template with those  
        ->render('singerlist');
    }
public function showme($id)
{ 
    // connect to the model
    $singers = new \App\Models\Singers(); 
    // retrieve all the records 
    $record = $singers->find($id);
    // get a template parser
    $parser = \Config\Services::parser();
    // tell it about the substitions
    return $parser->setData($record)
// and have it render the template with those  
        ->render('onesinger');
}
  
}
