<?php
include_once 'Account.php';
require_once 'database.php';

class User implements Account{
    private $first_name;
    private $second_name;
    private $Email;
    private $city_of_residence;
    private $password;




    public function setFirstName($first_name)
    {
        $this->first_name=$first_name;
    }
    public function setSecondName($second_name)
    {
        $this->second_name=$second_name;
    }
    public function setMail($Email)
    {
        $this->Email=$Email;
    }

    public function setResidence($city_of_residence)
    {
        $this->city_of_residence=$city_of_residence;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function getSecondName()
    {
        return $this->second_name;
    }
    public function getMail()
    {
        return $this->Email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function logout($pdo){

        session_destroy();
    }


    public function register($pdo){


    	try{
    		$statement=$pdo->prepare("INSERT INTO user_details(first_name,second_name,Email,city_of_residence,password)VALUES (?,?,?,?,?)");
    		$statement->execute([$this->first_name,$this->second_name,$this->Email,$this->city_of_residence,$this->password]);
    		$statement= null;
    		return "success";

    	}
    	catch (PDOException $error){
            echo "error somewhere";
    		return $error->getMessage();
    	}
    }
    public function login($pdo){

        try{
            $statement=$pdo->prepare("SELECT password from user_details WHERE Email=?");
            $statement->execute([$this->Email]);
            $result=$statement->fetch();
            $this->password=$result['user-password'];
            $statement=null;

            return result;
        }



    catch(PDOException $error){
        return $error->getMessage();
    }





}

}
?>
