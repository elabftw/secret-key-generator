<?php declare(strict_types=1);

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Key;

/**
 * @author Nicolas CARPi <nico-git@deltablot.email>
 * @copyright 2023 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */

require_once 'vendor/autoload.php';

$key = $argv[1];
$ciphertext = $argv[2];

echo Crypto::decrypt($ciphertext, Key::loadFromAsciiSafeString($key));
