<?php
/**
 * Created by PhpStorm.
 * User: huxiuchang
 * Date: 15-9-17
 * Time: 下午1:50
 */
class BaseController
{
    protected $view;

    public function __construct()
    {
    }

    public function __destruct()
    {
        //视图模块
        $view = $this->view;
        if ( $view instanceof View ) {
            extract($view->data);
            require $view->view;
        }

        //邮件发送模块
        $mail = $this->mail;
        if ( $mail instanceof Mail ) {
            $mailer = new Nette\Mail\SmtpMailer($mail->config);
            $mailer->send($mail);
        }
    }
}