<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ChangePasswordTest extends TestCase
{
    public function test1ChangePasswordfailseWithWrongOllPassword(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            false,
            $tmp->ChangePassword('vshbmt@gmail.com','123456788','987654321')  //change password  failse with wrong old password
        );
    }

    public function test2ChangePasswordWithExaclyOldPassword(): void
    {
        $tmp = new Account();
        $this->assertEquals(

            true,
            $tmp->ChangePassword('vshbmt@gmail.com','123456789','987654321')  //change password  success with exaclly old password
        );
    }
    public function test3ChangePasswordWithEmptyNewPassword(): void
    {
        $tmp = new Account();
        $this->assertEquals(

            true,
            $tmp->ChangePassword('vshbmt@gmail.com','123456789','987654321')  //change password  success with exaclly old password
        );
    }

    public function test4ChangePasswordWithExaclyOldPassword(): void
    {
        $tmp = new Account();
        $this->assertEquals(
            true,
            $tmp->ChangePassword('vshbmt@gmail.com','987654321','123456789')  //change password  success with exaclly old password
        );
    }
}
