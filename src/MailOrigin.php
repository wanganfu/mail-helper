<?php
declare(strict_types=1);

namespace annon\MailHelper;

use Swift_SmtpTransport;

class MailOrigin
{
    public function init(): \Swift_Transport
    {
        if (config("mail.origin.port") == 465) {
            return (new Swift_SmtpTransport(config("mail.origin.host"), config("mail.origin.port"), "ssl"))
                ->setUsername(config("mail.origin.username"))
                ->setPassword(config("mail.origin.password"))
                ->setStreamOptions([
                    "ssl" => [
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                    ]
                ]);
        }
        return (new Swift_SmtpTransport(config("mail.origin.host"), config("mail.origin.port")))
            ->setUsername(config("mail.origin.username"))
            ->setPassword(config("mail.origin.password"));
    }
}