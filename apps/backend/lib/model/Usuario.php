<?php

/**
 * @method string getPassword()
 * @method string getUsername()
 */
class Usuario extends BaseUsuario
{
    public function checkPassword($password)
    {
        return $this->getPassword() === $password;
    }
}