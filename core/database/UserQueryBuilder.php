<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 4-10-2018
 * Time: 16:38
 */


//A class used for SQL regarding user data
// It is a child class of "QueryBuilder" class (hence we can call on pdo without creating that statement in this class)
class UserQueryBuilder extends QueryBuilder
{
    //Making a function that retrieves all data from the user, using the email and password
    // then statement gets executed


    function GetUserByEmailAndPassword($email, $password)
    { //this function will get a user from the database where the password and the email is the same as the user input
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ? where state = 1");
        $statement->bindValue(1,$email);
        $statement->bindvalue(2,hash("sha256",$password));
        $statement->execute();
        $userData = $statement->fetchObject();
        if($userData != null){
            $_SESSION["user_session"] = $userData;
            //var_dump($_SESSION['user_session'][0]->id);
            header("location: home");
        }

    }

    function LoginCheck()
    { // check to see if the user is logged in, if not they will be redirected to the home page
        if(!isset ($_SESSION["user_session"])) {
            header("location: home");
        }
    }

    function IsUserLoggedIn()
    { //check used to display certain nav elements depending on whether the user is logged in or not.

        if(isset ($_SESSION["user_session"])) {
            return true;
        }

    }

    Function SelectAllUsers()
    {

        $statement = $this->pdo->prepare("SELECT * FROM users");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);

    }

        public function addNewUser($fname, $lname, $email, $mobile, $password, $pwcheck){
        // used to insert data into the specified table

        $sql = $this->pdo->prepare("Insert into users(fname, lname, email, mobile, password, pwcheck)
        values (?, ?, ?, ?, ?, ?)");

        $sql->bindValue(1,$fname);
        $sql->bindValue(2,$lname);
        $sql->bindValue(3,$email);
        $sql->bindValue(4,$mobile);
        $sql->bindValue(5,$password);
        $sql->bindValue(6,$pwcheck);

        $sql->execute();
    }

    Function DeleteUserByID($id)
    {
        $sql = $this->pdo->prepare("Delete from users where id = ?");
        $sql->bindValue(1,$id);
        
        $sql->execute();
    }


}


