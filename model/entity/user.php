<?php
// Classe représetant les utilisateurs stockés en base de données
class User {

    protected int $id;
    protected string $lastname;
    protected string $firstname;
    protected string $pictuser;
    protected string $birth_date;
    protected int $city_code;
    protected string $city;
    protected string $adress;
    protected int $phone;
    protected string $email;
    protected string $registration;
    protected int $library_number;
    
    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }
    
    public function setId(int $id){
        $this->id =$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setLastName(string $lastname){
        $this->lastname =$lastname;
    }
    public function getLastName(){
        return $this->lastname;
    }

    public function setFirstName(string $firstname){
        $this->firstname =$firstname;
    }
    public function getFirstName(){
        return $this->firstname;
    }

    public function setPictuser(string $pictuser) {
        $this->pictuser = $pictuser;
    }

    public function getPictuser(){
        return $this->pictuser;
    }

    public function setBirth_Date(string $birth_date){
        $this->birth_date =$birth_date;
    }
    public function getBirth_Date(){
        return $this->birth_date;
    }

    public function setCity_Code(int $city_code){
        $this->city_code =$city_code;
    }
    public function getCity_Code(){
        return $this->city_code;
    }

    public function setCity(string $city){
        $this->city =$city;
    }
    public function getCity(){
        return $this->city;
    }

    public function setAdress(string $adress){
        $this->adress =$adress;
    }
    public function getAdress(){
        return $this->adress;
    }

    public function setPhone(int $phone){
        $this->phone =$phone;
    }
    public function getPhone(){
        return $this->phone;
    }

    public function setEmail(string $email){
        $this->email =$email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setRegistration(string $registration){
        $this->registration =$registration;
    }
    public function getRegistration(){
        return $this->registration;
    }

    public function setLibrary_Number(int $library_number){
        $this->library_number =$library_number;
    }
    public function getLibrary_Number(){
        return $this->library_number;
    }



}
