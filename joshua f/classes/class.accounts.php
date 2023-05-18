<?php
class accounts{
    Public function login(){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $pdo = new PDO('mysql:host=localhost;dbname=accounts','root','')

        $account =$pdo->prepare('SELECT * from accounts WHERE email=:email and password=:password')
        $account->bindValue('email',$email);
        $account->bindValue('password',$password);
        $account->execute();


        $data =$account->fetchAll (PDO::fetch_assoc);
    }
    public function register(){

    }
}