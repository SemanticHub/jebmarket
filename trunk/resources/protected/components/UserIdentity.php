<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

    private $_id;
    private $_username;
    private $_last_login;

    // Define Custom Error Constant, For other defined constant see CUserIdentity Class
    const ERROR_USER_NOT_ACTIVATED = 3;
    /**
     * Authenticates a user.
     * @return integer errorCode
     */
    public function authenticate() {
        $data = User::model()->findByAttributes(array('username' => $this->username));
        if ($data === null)
        $data = User::model()->findByAttributes(array('email' => $this->username));

        if ($data === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($data->password !== $data->hashPassword($this->password, $data->salt)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else if ($data->status == 0) {
            $this->errorCode = self::ERROR_USER_NOT_ACTIVATED;
        } else {
            $this->_id = $data->id;
            $this->_username = $data->username;
            $this->_last_login = $data->last_login;
            $data->last_login = date("Y-m-d H:i:s");
            $data->save();
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode;
    }

    /**
     * @return integer $id, id of User model
     */
    public function getId() {
       return $this->_id;
    }

    /**
     * @return string $username, the username of User model
     */
    public function getName() {
        return $this->_username;
    }
}