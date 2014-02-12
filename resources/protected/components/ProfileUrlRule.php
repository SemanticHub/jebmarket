<?php
class ProfileUrlRule extends CBaseUrlRule
{
    public $connectionID = 'db';

    public function createUrl($manager,$route,$params,$ampersand)
    {
        return false;  // this rule does not apply
    }

    public function parseUrl($manager,$request,$pathInfo,$rawPathInfo)
    {
        $path = explode("/",$rawPathInfo);

        if(isset($path[0]) && !empty($path[0]))
        {
            $user = User::model()->findByAttributes(array('username'=>$path[0]));

            if(!is_null($user) && isset($user->id))
            {
                $_GET['user_id'] = $user->id;
                $path_re = array_slice($path, 1);
                $path_t = implode("/",$path_re);
                $page_view = Yii::app()->request->getParam('view');
                if(!empty($page_view)){
                    $path_t = $page_view;
                }
                $menu = Menu::model()->findAll(array('condition' => "jebapp_user_id = $user->id AND url = '$path_t'"));
                if(isset($path[0]) && !isset($path[1]))
                {
                    $controller = 'site';
                    $action = 'index';
                    $route = $controller.'/'.$action;
                    return $route;
                }
                elseif(!empty($menu))
                {
                    $route = $path_t;
                    if(!empty($page_view)){
                        $route = 'page/view/view/'.$path_t;
                    }
                    return $route;
                }
            }
        }
        return false;
    }
}