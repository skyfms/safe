<?php


namespace Safe\PhpStanFunctions;

class PhpStanFunctionMapReader
{
    /**
     * @var array<string, array>
     */
    private $functionMap;

    public function __construct()
    {
        $this->functionMap = require __DIR__.'/../../vendor/phpstan/phpstan/src/Reflection/SignatureMap/functionMap.php';
    }

    public function hasFunction($functionName)
    {
        return isset($this->functionMap[$functionName]);
    }

    public function getFunction($functionName): PhpStanFunction
    {
        return new PhpStanFunction($this->functionMap[$functionName]);
    }
}
