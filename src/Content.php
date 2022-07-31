<?php
declare(strict_types=1);

namespace annon\MailHelper;

class Content
{
    /**
     * @var string 邮件标题
     */
    private $title;

    /**
     * @var string 邮件内容
     */
    private $body;

    /**
     * @var string 收件人邮箱地址
     */
    private $user_mail;

    /**
     * @var string 发送内容
     */
    private $user_name;

    /**
     * @param string $user_mail 收件人邮箱地址
     * @param string $user_name 收件人称呼
     * @param string $title 发送的主标题
     * @param string $body 要发送的内容
     */
    public function __construct($user_mail, $user_name, $title, $body)
    {
        $this->user_mail = $user_mail;
        $this->title = $title;
        $this->user_name = $user_name;
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getUserMail()
    {
        return $this->user_mail;
    }

    /**
     * @param mixed $user_mail
     */
    public function setUserMail($user_mail): void
    {
        $this->user_mail = $user_mail;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }
}