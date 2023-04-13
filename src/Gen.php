<?php declare(strict_types=1);
/**
 * @author Nicolas CARPi <nico-git@deltablot.email>
 * @copyright 2023 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */

namespace Elabftw\SecretKeyGenerator;

use Defuse\Crypto\Key;

/**
 * Generate secret key locally
 */
class Gen
{
    public function generate(): string
    {
        return Key::createNewRandomKey()->saveToAsciiSafeString();
    }
}
