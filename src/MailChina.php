<?php
declare(strict_types=1);

namespace annon\MailHelper;

use Swift_SmtpTransport;

class MailChina
{
    public function init(): \Swift_Transport
    {
        return (new Swift_SmtpTransport(config("mail.china.host"), config("mail.china.port")))
            ->setUsername(config("mail.china.username"))
            ->setPassword(config("mail.china.password"))
            ;
    }
}