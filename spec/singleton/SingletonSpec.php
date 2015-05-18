<?php

namespace spec\singleton;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SingletonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('singleton\Singleton');
    }
}
