<?php
/**
 * Description of WebUser
 *
 * @author Ekram
 */
class WebUser extends CWebUser {

    private $_model;

    function isAdmin() {
        $user = $this->loadUser(Yii::app()->user->id);
        return intval($user->role) == 1;
    }
    // Load user model.
    protected function loadUser($id = null) {
        if ($this->_model === null) {
            if ($id !== null)
                $this->_model = User::model()->findByPk($id);
        }
        var_dump($this->_model);
        return $this->_model;
    }
}
?>
