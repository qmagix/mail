<?php

/**
 * ownCloud - Mail
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @copyright Christoph Wurst 2016
 */
use OCA\Mail\Command\CreateAccount;
use OCA\Mail\AppInfo\Application;

$app = new Application();
$accountService = $app->getContainer()->query('OCA\Mail\Service\AccountService');
$crypto = OC::$server->getCrypto();

/** @var Symfony\Component\Console\Application $application */
$application->add(new CreateAccount($accountService, $crypto));
