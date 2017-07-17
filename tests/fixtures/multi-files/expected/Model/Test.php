<?php

namespace Joli\Jane\Tests\Expected\Model;

class Test
{
    /**
     * @var Testfoo
     */
    protected $foo;

    /**
     * @return Testfoo
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param Testfoo $foo
     *
     * @return self
     */
    public function setFoo(Testfoo $foo = null)
    {
        $this->foo = $foo;

        return $this;
    }
}
