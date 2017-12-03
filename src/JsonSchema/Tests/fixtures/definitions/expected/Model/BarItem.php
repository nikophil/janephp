<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\JsonSchema\Tests\Expected\Model;

class BarItem
{
    /**
     * @var string
     */
    protected $bar;

    /**
     * @return string
     */
    public function getBar(): ?string
    {
        return $this->bar;
    }

    /**
     * @param string $bar
     *
     * @return self
     */
    public function setBar(?string $bar): self
    {
        $this->bar = $bar;

        return $this;
    }
}