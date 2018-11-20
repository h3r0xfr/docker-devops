<?php
namespace App\tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

        public function testSetLastName_validValue_successful()
        {
                $user = new User;
                $user->setLastName("Test");
                $this->assertEquals("Test", $user->getLastName());
        }
}
?>
