<?php
namespace Models;

use \Core\Model;

class Alunos extends Model {

    public function isLogged()
    {
        if(isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])){
            return true;
        } else {
            return false;
        }
    }

    public function fazerLogin($email, $senha)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND senha_mvc = '$senha'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $_SESSION['lgaluno'] = $row['id'];

            return true;
        }

        return false;
    }

}