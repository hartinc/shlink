<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Util;

use Shlinkio\Shlink\Core\Exception\InvalidUrlException;

interface UrlValidatorInterface
{
    /**
     * @throws InvalidUrlException
     */
    public function validateUrl(string $url): void;
}
