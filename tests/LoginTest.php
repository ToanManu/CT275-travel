<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LoginTest extends TestCase
{
    public function test1LoginSuccessWithCorrectInput(): void
    {
        $tmp = new Account();
        $this->assertEquals(                               //login success with correct username password
            'admin',
            $tmp->login('admin','160799881')
        );
    }

    public function test3LoginSuccessWithCorrectUsernameWrongPassword(): void
    {
        $tmp = new Account();                             //login failse with correct username wrong passwortd 
        $this->assertEquals(
            false,
            $tmp->login('tanchan679@gmail.com','1607998wrong')
        );
    }

    public function test4LoginFailseWithEmptyUsername(): void
    {
        $tmp = new Account();                             //login failse with empty username 
        $this->assertEquals(
            false,
            $tmp->login('tanchan679@gmail.com','')
        );
    }

    public function test5Login(): void
    {
        $tmp = new Account();                             //login failse with empty password
        $this->assertEquals(
            '0',
            $tmp->login('','password')
        );
    }
}
