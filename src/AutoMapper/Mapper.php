<?php

namespace Jane\AutoMapper;

abstract class Mapper
{
    protected $autoMapper;

    protected $callbacks;

    protected $hash;

    public function getModificationHash(): ?string
    {
        return $this->hash;
    }

    public function setAutoMapper(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function addCallback(string $name, callable $callback)
    {
        $this->callbacks[$name] = $callback;
    }

    abstract public function map($value, array $context = []);
}