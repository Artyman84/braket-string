<?php
declare(strict_types = 1);

namespace Artyman\Brackets;

use InvalidArgumentException;

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
        $open = 0;
        $close = 0;
        for ($i = 0, $l = strlen($this->string); $i < $l; $i++) {
            $char = $this->string[$i];
            if (!in_array($char, ["\n", "\t", " ", "(", ")"])) {
                throw new InvalidArgumentException('Invalid symbol found: ' . $char);
            }

            if ($char == '(') {
                $open++;
            }

            if ($char == ')') {
                $close++;
            }

            if ($open < $close) {
                return false;
            }
        }

        return true;
    }
}