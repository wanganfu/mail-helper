<?php
declare(strict_types=1);

namespace annon\MailHelper;

use Swift_Mailer;
use Swift_Message;

class MailService
{
    /**
     * 调用这个方法发送邮件
     * @param string $local 指定要发送的地方('china' || 'origin')
     * @param Content $content 设置要发送到内容
     * @return int 返回发送结果数目
     */
    public function send($local, Content $content): int
    {
        // Defined the Mailer Transport
        switch ($local) {
            case "china": $class = MailChina::class; break;
            default: $class = MailOrigin::class; break;
        }

        $transport = (new $class)->init();
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message($content->getTitle()))
            ->setFrom([config("mail.$local.username") => config("mail.$local.nickname")])
            ->setTo([$content->getUserMail() => $content->getUserName()])
            ->setBody($content->getBody(), 'text/html')
        ;

        return $mailer->send($message);
    }
}