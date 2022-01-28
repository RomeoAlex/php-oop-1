
<?php

class Movie {

    public $title;

    public $original_title;
    
    public $release_date;

    public $original_language;

    public function __construct($_title, $_original_title, $_release_date, $_original_language) {
        $this->title = $_title;
        $this->original_title = $_original_title;
        $this->$release_date = $_release_date;
        $this->$original_language =$_original_language;
    }
    public function onlyTitle(){
        return $this->title . ' ' . $this->original_title;
    }

    public function whenComesOut(){
        return $this->title . ' ' . $this->release_date;
    }

    public function geekInfo(){
        return $this->original_language . ' ' . $this->original_title;
    // aggiungo metodo per stmapa

    }
}
// inserisco nomi anche se in questo caso dovrei mettere id numerici
$tigre = new Movie('La tigre e il dragone - La spada del destino', 'Crouching Tiger, Hidden Dragon: Sword of Destiny', '2016', 'inglese' );

$predator = new Movie('Predator', 'Predator', '1987', 'inglese' );

$fury =  new Movie('Mad Max: Fury Road', 'Mad Max: Fury Road', '2015', 'inglese' );

$max = new Movie('Interceptor', 'Mad Max', '1979', 'inglese' );

// stampo gli ogetti creati
var_dump($tigre);
echo '<h1></h1>';
var_dump($predator);
echo '<h1></h1>';
var_dump($fury);
echo '<h1></h1>';
var_dump($max);
            

?>




