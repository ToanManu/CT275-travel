<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RegisterTest extends TestCase
{
    public function test1RegisterFailseWithEmptyInput(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            false,
            $tmp->Registration('','','','','')                 // register failse with empty input
        );
    }
    public function test2RegisterFalseWithExistAccountInDatabase(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            false,
            $tmp->Registration('vshbmt@gmail.com','123454321','huy','0332591776','my duc ha noi')                // register failse with an exist account in database
        );
    }
    public function test3RegisterSuccessWithCorrectInput(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            true,
            $tmp->Registration('m134m4a1@gmail.com','12345678','chan','0332591776','my duc ha noi')                     // register success with suitable input data
        );
    }
    public function test4RegisterWithSomeJSInjectionQuery(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            false,
            $tmp->Registration('m1342a65@gmail.com','trollpass','javascript:void(document.cookie=”username=otherUser”)','test','test')    // troll stupid dev  failse
        );
    }

}
