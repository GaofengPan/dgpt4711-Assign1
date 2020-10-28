<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Singers {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Jay Chou',
            'city' => 'China-Taiwan',
            'height'=> '175cm',
            'age' =>'41',
            'birthday'=>'1979-1-18',
            'food'=>'milk tea',
            'image' => 'jay.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Eason Chan',
            'city' => 'China-Hong Kong',
            'height'=> '173cm',
            'age' =>'46',
            'birthday'=>'1974-7-27',
            'food'=>'apple',          
            'image' => 'eason.png',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Jackey Cheung',
            'city' => 'China-Hong Kong',
            'height'=> '175cm',
            'age' =>'59',
            'birthday'=>'1961-7-10',
            'food'=>'noodles',
            'image' => 'jacky.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Andy Liu',
            'city' => 'China-Hong Kong',
            'height'=> '174cm',
            'age' =>'59',
            'birthday'=>'1961-1-18',
            'food'=>'cake',
            'image' => 'andy.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Aaron Kwok',
            'city' => 'China-Hong Kong',
            'height'=> '171cm',
            'age' =>'41',
            'birthday'=>'1965-10-26',
            'food'=>'Hot pot',
            'image' => 'aaron.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Leon Lai',
            'city' => 'China-Hong Kong',
            'height'=> '175cm',
            'age' =>'41',
            'birthday'=>'1979-1-18',
            'food'=>'Chicken',
            'image' => 'leon.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
