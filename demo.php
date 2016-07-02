<?php
/**
 * Created by DeltaDjazz
 */


function hello($name){
    echo '<h2>Bonjour Ami du nom de '.$name.' !</h2>';
}


hello('Gideon');

?>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis consectetur, dolores, earum harum id iste labore magni minus mollitia nulla officia quae quaerat quas quidem sit vel voluptas? Non.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad aliquid at, beatae cum dolorem dolorum ducimus fugit harum magnam mollitia nobis optio pariatur possimus quasi qui rem reprehenderit.
</p>

<p>
    coucou les amis!!!!!
</p>

<?php
abstract class Voiture{

    public $couleur;
    private $vitesse;
    private $vitesseMax;

    public function __construct(){
        $this->vitesse = 0;
        $this->couleur = 'red';
        $this->vitesseMax =150;

        var_dump($this);
    }


    public function repeindre($couleur){
        $this->couleur = $couleur;
        echo "on repeint la voiture en ".$couleur ."<br>";

    }

    public function accelerer($vitesse){
        $this->vitesse += $vitesse;
        if ($this->vitesse >$this->vitesseMax) $this->vitesse = $this->vitesseMax;
        echo "acceleration de ".$vitesse." km/h. <br>";
    }

    public function ralentir($vitesse){
        $this->vitesse -= $vitesse;
        if ($this->vitesse <0) $this->vitesse =0;
    }
}
class Citroen extends Voiture{

    public  function __construct(){
        parent:: __construct();
        $this->couleur = 'Yellow';
    }
}

$car = new Citroen();
var_dump($car);
$car->repeindre('blue');
$car->accelerer(200);
var_dump($car);