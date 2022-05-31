<?php

/**
 * MiniBlogApplication.
 *
 * @author Katsuhiro Ogawa <fivestar@nequal.jp>
 */
class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array(
            '/acount'
                => array('controller' => 'account','action' => 'index'),
            '/acount/:action'
                => array('controller' => 'account'),
            '/'
                => array('controller' => 'status', 'action' => 'index'),
            '/status/post'
                => array('controller' => 'status', 'action' => 'post'),
            '/user/:user_name'
                => array('controller' => 'status', 'action' => 'user'),
            '/user/:user_name/status/:id'
                => array('controller' => 'status', 'action' => 'show'),
            '/account'
                => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
                => array('controller' => 'account'),
            '/follow'
                => array('controller' => 'account', 'action' => 'follow'),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn'      => 'mysql:dbname=mini-blog;host=69ecc131207c',
            'user'     => 'root',
            'password' => 'root',
        ));
    }
}