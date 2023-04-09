<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ChangeInformationTest extends TestCase
{
    public function test1ChangeSuccessWithFullInput(): void
    {
        $tmp = new Account();                             
        $this->assertEquals(
            true,
            $tmp->ChangeInformation('vshbmt@gmail.com', 'huy', 'm1342a65@gmail.com', '0332591776', 'my duc ha noi')  //success with correct inputdata
        );
    }
    public function test2ChangeFaillWithNoEmailInDatabase(): void
    {
        $tmp = new Account();                             
        $this->assertEquals(
            false,
            $tmp->ChangeInformation('2a362a65@gmail.com', 'huy', 'm1342a65@gmail.com', '0332591776', 'my duc ha noi') // failse with no exist email in database
        );
    }
    public function test3ChangeFalseWithJSInjection(): void
    {
        $tmp = new Account();                             
        $this->assertEquals(
            false,
            $tmp->ChangeInformation('vshbmt@gmail.com', 'cracker', 'm1342a65@gmail.com', '0332591776', 'javascript:void(document.cookie=”username=otherUser”)')  // failse with no input data
        );
    }
    public function test4ChangeFalseWithSomeInputEmpty(): void
    {
        $tmp = new Account();                             
        $this->assertEquals(
            false,
            $tmp->ChangeInformation('', 'huy', '', '', '') // failse with no exist email in database
        );
    }
}
