<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ClassPosts extends TestCase
{
    public function test1AddCommentSuccessWithFullInput(): void                     
    {
        $tmp = new ClassPosts();                              
        $this->assertEquals(
            true,
            $tmp->addcomment('vshbmt@gmail.com', 13, "i see your monster i see your paint tell me your problem i'll chase them away")   //success with correct input
        );
    }
    public function test2AddCommentWithNullVariable(): void
    {
        $tmp = new ClassPosts();                             
        $this->assertEquals(
            false,
            $tmp->addcomment('tanchan679@gmail.com', 13, "")                                                                               //failse with null variable
        );
    }
    public function test3AddCommentWithScriptInjection(): void
    {
        $tmp = new ClassPosts();                             
        $this->assertEquals(
            false,
            $tmp->addcomment('tanchan679@gmail.com', 13, "javascript:void(document.cookie=”username=otherUser”)")                                                                              //failse with null variable
        );
    }
}
