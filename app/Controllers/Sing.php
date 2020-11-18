<?php
namespace App\Controllers;
class Sing extends BaseController {
public function index() { 
    
    // connect to the model
    $singers = new \App\Models\Singers(); // retrieve all the records 
    $records = $singers->findAll();
    // get a template parser
    $parser = \Config\Services::parser(); // tell it about the substitions
    //step1
    $table = new \CodeIgniter\View\Table(); 
    $headings = $singers->fields;
    $headings = array_map('ucfirst', $headings);
    $displayHeadings = array_slice($headings, 1, 3); 
   // $table->setHeading(array_map('ucfirst', $displayHeadings));
    $table->setHeading($headings[1],$headings[7],'Link');
    foreach ($records as $record) { 
        $nameLink = anchor("sing/showme/$record->id",'Click here'); 
        $table->addRow($record->name,'<img src="/media/image/'.$record->image.'">',$nameLink);
       
    }
    $table->addRow('<p><a href="/sing">HOME</a></p>');
    //step2
    $template = [ 'table_open' => '<table cellpadding="2px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">',
        'row_alt_start' => '<tr style="background-color:#dddddd">', ]; 
    $table->setTemplate($template);
    $fields = [           
        'title' => 'Chinese Pop Singers',     
        'heading' => 'Chinese Pop Singers',         
        'footer' => 'Copyright GaofengPan'         ];
    return $parser->setData($fields)               
                    ->render('templates\top') .      
            $table->generate() .          
            $parser->setData($fields)
                    ->render('templates\bottom');
    
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
    //step1
    $table = new \CodeIgniter\View\Table(); 
    $headings = $singers->fields;
    $headings = array_map('ucfirst', $headings);
    $table->addRow($headings[0],$record["id"]);
    $table->addRow($headings[1],$record["name"]);
    $table->addRow($headings[2],$record["city"]);
    $table->addRow($headings[3],$record["height"]);
    $table->addRow($headings[4],$record["age"]);
    $table->addRow($headings[5],$record["birthday"]);
    $table->addRow($headings[6],$record["food"]);
    $table->addRow($headings[7],"<img src='/media/image/".$record['image'].'\'/>');
    $table->addRow('<p><a href="/sing">HOME</a></p>');
    //step2
    $template = [ 'table_open' => '<table cellpadding="2px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">',
        'row_alt_start' => '<tr style="background-color:#dddddd">', ]; 
    $table->setTemplate($template);
    $fields = [           
        'title' => 'Chinese Pop Singers', 
        'heading' => 'Chinese Pop Singers', 
        'footer' => 'Copyright GaofengPan'
        ];
    return $parser->setData($fields)               
                    ->render('templates\top') .      
            $table->generate() .          
            $parser->setData($fields)
                    ->render('templates\bottom');
}
  
}
