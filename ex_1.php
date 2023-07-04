<?php
class Company{
   public $name;
   public $location;
   public $tot_empoyees;
   public static $avg_wage=1500;
   public static $totalCompaniesCost=0;
   
   public function __construct($_name,$_location,$_tot_employees){
    $this->name=$_name;
    $this->location=$_location;
    $this->tot_employees=$_tot_employees;
    self::$totalCompaniesCost+=($this->tot_employees * self::$avg_wage * 12);
   }

   public function companyInfo(){
    if($this->tot_employees>0){
        echo "L'azienda $this->name con sede a $this->location ha ben $this->tot_employees \n" ;
    }else{
        echo "L'azienda $this->name con sede a $this->location non ha alcun dipendente ancora \n";
    }
    
   }

  public function spesaTot(){
    $spesaTot=$this->tot_employees * self::$avg_wage * 12;
    echo "La spesa totale dell'azienda $this->name di $spesaTot € all'anno. \n";
  }

  public static function totale_tutte_compagnie(){
    echo "Il totale assoluto di tutte le aziende è di : ".self::$totalCompaniesCost."€ all'anno";
  }


   


}

$aulab=new Company("Aulab","Bari",50);
$pastificio=new Company("Pasta Fresca di Guri","Bari",0);
$armani=new Company("Armani","Milan",1000);
$apple=new Company("Apple Italy","Rome",500);
$google=new Company("Google Italy","Florence",1200);


// var_dump($aulab);
// var_dump($pastificio);
// var_dump($armani);
// var_dump($apple);
// var_dump($google);

$aulab->companyInfo();
$pastificio->companyInfo();
$armani->companyInfo();
$apple->companyInfo();
$google->companyInfo();
$aulab->spesaTot();
$pastificio->spesaTot();
$armani->spesaTot();
$apple->spesaTot();
$google->spesaTot();
Company::totale_tutte_compagnie();


