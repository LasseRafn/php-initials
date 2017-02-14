<?php

use PHPUnit\Framework\TestCase;

class GenerateTest extends TestCase
{
    public function testCanGenerateInitialsWithoutNameParameter()
    {
        $avatar = new \LasseRafn\Initials\Initials();

        $avatar->generate('Lasse Rafn');

        $this->assertEquals('LR', $avatar->getInitials());
    }
}
