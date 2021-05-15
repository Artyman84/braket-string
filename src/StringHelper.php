<?php
declare(strict_types = 1);

namespace Artyman\Brackets;

/**
 * Class VerificationString
 * @package Artyman\Brackets
 */
class StringHelper
{
    /**
     * @var string
     */
    private $string;

    /**
     * VerificationString constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @return bool
     */
    public function verifyString(): bool
    {
        return !!$this->string;
    }
}