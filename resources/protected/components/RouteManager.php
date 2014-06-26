<?php

/**
 * Created by PhpStorm.
 * User: Ekram
 * Date: 6/17/14
 * Time: 3:50 AM
 */
class RouteManager extends CApplicationComponent {

    public $primaryDemain;

    public $secondaryDomain;

    public $defaultHomeController;


    public function init() {

        $requestedUrl = Yii::app()->request->hostInfo.Yii::app()->request->url;
        $host = str_replace('www.', '', Yii::app()->request->hostInfo);

        # if its only myjeb.com => forward to jebzone.com
        if((Yii::app()->request->url == "/" || Yii::app()->request->url == "") && $host == $this->primaryDemain) {
            Yii::app()->request->redirect($this->secondaryDomain);
            Yii::app()->end();

        # if myjeb.com/module/controller/action => jenzone.com/module/controller/action
        } else if((Yii::app()->request->url != "/" || Yii::app()->request->url != "") && $host == $this->primaryDemain) {
            Yii::app()->request->redirect( $this->secondaryDomain.Yii::app()->request->url );

        # Otherwise
        } else {

            # if its a domain like abc.com => check if the domain exists in any users website module
            # if its a sub-domain like abc.myjeb.com => check if the sub-domain is valid exists in any users website
            # N.B. domain should be save in http://domain.com format and sub-domain must save in http://abc.domain.com format.
            if( $host != $this->primaryDemain && $host != $this->secondaryDomain ) {
                $domainExists = Website::model()->find('domain=:domain',array(':domain'=> $host));

                # domain or sub-domain exists
                if($domainExists) {

                    # if request is only domain or  sub-domain
                    if(Yii::app()->request->url == "/" || Yii::app()->request->url == "" ){

                        # check for users default home settings
                        $defaultHomeExists = Menu::model()->find('default_home=1 && jebapp_user_id=:juid', array(':juid'=> $domainExists->jebapp_user_id));

                        # if default home exists => redirect to default home
                        if($defaultHomeExists) {
                            Yii::app()->request->redirect(Yii::app()->request->hostInfo.'/'.$defaultHomeExists->url);

                        # if default home not exists => redirect to system defined default home controller
                        } else {
                            Yii::app()->request->redirect(Yii::app()->request->hostInfo.'/'.$this->defaultHomeController);
                        }

                    # if domain or sub-domain with pathInfo => check user website has such a public page
                    } else {
                        $pageExists = Menu::model()->find('url=:url && jebapp_user_id=:juid', array(':url'=> ltrim(Yii::app()->request->url, '/'),':juid'=> $domainExists->jebapp_user_id));

                        # if page exists, forward to that page
                        if($pageExists) {
                            Yii::app()->request->redirect($requestedUrl);
                            Yii::app()->end();

                        # if not page exists, the link is not valid for this domain or sub-domain, so redirect to 404,
                        # NB: main site might has a page for this url but that not valid for that user domain or sub-domain
                        } else {
                            throw new CHttpException(404,'Page not found.');
                        }
                    }

                # Not Exists => Forward to jebzone.com so that user can open a site or show message site not available *
                } else {
                    Yii::app()->request->redirect($this->secondaryDomain);
                    Yii::app()->end();
                }
            }
        }
    }

    # Helper function to get only host part for any domain
    public function getDomain($url) {
        $pieces = parse_url($url);
        $domain = isset($pieces['host']) ? $pieces['host'] : '';
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
            return $regs['domain'];
        }
        return false;
    }
}