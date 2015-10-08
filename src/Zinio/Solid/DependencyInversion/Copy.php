<?php
namespace Zinio\Solid\DependencyInversion;

use Zinio\Solid\DependencyInversion\IWrite;
use Zinio\Solid\DependencyInversion\IRead;
use Exception;

class Copy
{
    private $mRead;
    private $mWrite;

    public function __construct(IRead $iRead, IWrite $iWrite) {
        if ($iRead == null || $iWrite == null) {
            throw new Exception("Read or Write not inital");
        }
        $this->mRead = $iRead;
        $this->mWrite = $iWrite;
    }

    public function run()
    {
        $this->mWrite->write($this->mRead->read());
    }
}