<?php

/**
 * UserIdentity representa los datos necesarios para la identidad de un usuario.
 * Contiene el método de autenticación que comprueba si los datos proporcionados
 * pueden identificar el usuario.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_username;
    private $_name;  
    private $id_;        

    /**
        * Autentica a un usuario.
        * Asegura que si el nombre de usuario y la contraseña son correctos
        * @return boolean si la autenticación tiene éxito.
        */
    public function authenticate()
    {
        $email = Email::model()->find('LOWER(email)=?',array(strtolower($this->username))); 

        if($email!=null)         
            $pass = User::model()->find('id_person=?',array($email->id_person));
        
        if($email===null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if($pass->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$email->id_person;
//            $this->id_=$pass->id_user;
            self::getDatos($pass);
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
    
    public function getDatos($id_user)
    {
        $this->id_=$id_user->id_user;
        
        $persona = Person::model()->find('id_person=?',array($this->_id));
        
        $manegerG = ManagerG::model()->find('id_user=?',array($this->id_));
        
        if($manegerG!=null){
            
//        echo '<pre>';print_r($medicoG);echo '</pre>';exit();
        }else{
            $manegerMC = ManagerMC::model()->find('id_user=?',array($this->id_));
            if($manegerMC!=null){
                echo '<pre>';print_r($manegerMC);echo '</pre>';exit();
            }else{
                $medico = Medical::model()->find('id_user=?',array($this->id_));
                if($medico!=null){
                    $alias = Alias::model()->find('id_user=?',array($this->id_));
                    if($alias!=null){echo '<pre>';print_r($alias);echo '</pre>';exit();
                        Yii::app()->user->setState('id_alias',$alias->id_alias);
                        Yii::app()->user->setState('id_m_c',$alias->id_medical_center);//id del 1° centro medico del usuario
                    }
                }
            }            
        }
        
        
        $this->_username=$persona->name;
        Yii::app()->user->setState('id_person',$this->_id);
        
        
//        $tipo = Alias::model()->find('id_user=?',array($this->id_));
        
        
    }

    /**
        * 
        * @return Int el id de la persona que se esta logueando al sistema.
        */
    public function getId()
    {
            return $this->_id;
    }

    /**
        * 
        * @return String el nombre de la persona que se esta logueando al sistema.
        */
    public function getName()
    {
            return $this->_username;
    }  
}