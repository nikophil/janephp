<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Model;

class TestPostBody
{
    /**
     * @var string
     */
    protected $foo;

    /**
     * @return string
     */
    public function getFoo(): ?string
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(?string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }
}