<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default.transport.real' shared service.

return $this->services['swiftmailer.mailer.default.transport.real'] = new \Swift_Transport_MailTransport(new \Swift_Transport_SimpleMailInvoker(), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher()) && false ?: '_'});