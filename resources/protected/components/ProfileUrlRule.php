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
            $domainid = Website::model()->findByAttributes(array('domain'=>$path[0]));
            if(isset($domainid->jebapp_user_id)){
                $user = User::model()->findByPk($domainid->jebapp_user_id);
                if(!is_null($user) && isset($user->id)){
                    $_GET['user_id'] = $user->id;
                    $path_re = array_slice($path, 1);
                    $path_t = implode("/",$path_re);
                    if(isset($path[0]) && !isset($path[1])){
                        $menu = Menu::model()->findByAttributes(array("jebapp_user_id"=>$user->id, "default_home"=>'1'));
                        $route = 'page/view/view/'.$menu->url;
                        return $route;
                    }else{
                        $menu = Menu::model()->findByAttributes(array("jebapp_user_id"=>$user->id, "url"=>$path[1]));
                        if(!empty($menu)){
                            $route = 'page/view/view/'.$path_t;
                            if($menu->route == 'blog'){
                                $route = 'blog';
                            }
                            return $route;
                        }else{
                            $route = $path_t;
                            return $route;
                        }
                    }
                }
            }
        }
        return false;
    }
}