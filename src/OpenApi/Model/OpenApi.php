<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Model;

class OpenApi
{
    /**
     * @var string
     */
    protected $swagger;
    /**
     * @var Info
     */
    protected $info;
    /**
     * @var string
     */
    protected $host;
    /**
     * @var string
     */
    protected $basePath;
    /**
     * @var string[]
     */
    protected $schemes;
    /**
     * @var string[]
     */
    protected $consumes;
    /**
     * @var string[]
     */
    protected $produces;
    /**
     * @var mixed[]|PathItem[]
     */
    protected $paths;
    /**
     * @var Schema[]
     */
    protected $definitions;
    /**
     * @var BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]
     */
    protected $parameters;
    /**
     * @var Response[]
     */
    protected $responses;
    /**
     * @var string[][][]
     */
    protected $security;
    /**
     * @var BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[]
     */
    protected $securityDefinitions;
    /**
     * @var Tag[]
     */
    protected $tags;
    /**
     * @var ExternalDocs
     */
    protected $externalDocs;

    /**
     * @return string
     */
    public function getSwagger(): ?string
    {
        return $this->swagger;
    }

    /**
     * @param string $swagger
     *
     * @return self
     */
    public function setSwagger(?string $swagger): self
    {
        $this->swagger = $swagger;

        return $this;
    }

    /**
     * @return Info
     */
    public function getInfo(): ?Info
    {
        return $this->info;
    }

    /**
     * @param Info $info
     *
     * @return self
     */
    public function setInfo(?Info $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return self
     */
    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath(): ?string
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     *
     * @return self
     */
    public function setBasePath(?string $basePath): self
    {
        $this->basePath = $basePath;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSchemes(): ?array
    {
        return $this->schemes;
    }

    /**
     * @param string[] $schemes
     *
     * @return self
     */
    public function setSchemes(?array $schemes): self
    {
        $this->schemes = $schemes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getConsumes(): ?array
    {
        return $this->consumes;
    }

    /**
     * @param string[] $consumes
     *
     * @return self
     */
    public function setConsumes(?array $consumes): self
    {
        $this->consumes = $consumes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getProduces(): ?array
    {
        return $this->produces;
    }

    /**
     * @param string[] $produces
     *
     * @return self
     */
    public function setProduces(?array $produces): self
    {
        $this->produces = $produces;

        return $this;
    }

    /**
     * @return mixed[]|PathItem[]
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param mixed[]|PathItem[] $paths
     *
     * @return self
     */
    public function setPaths($paths): self
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * @return Schema[]
     */
    public function getDefinitions(): ?\ArrayObject
    {
        return $this->definitions;
    }

    /**
     * @param Schema[] $definitions
     *
     * @return self
     */
    public function setDefinitions(?\ArrayObject $definitions): self
    {
        $this->definitions = $definitions;

        return $this;
    }

    /**
     * @return BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]
     */
    public function getParameters(): ?\ArrayObject
    {
        return $this->parameters;
    }

    /**
     * @param BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[] $parameters
     *
     * @return self
     */
    public function setParameters(?\ArrayObject $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @return Response[]
     */
    public function getResponses(): ?\ArrayObject
    {
        return $this->responses;
    }

    /**
     * @param Response[] $responses
     *
     * @return self
     */
    public function setResponses(?\ArrayObject $responses): self
    {
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return string[][][]
     */
    public function getSecurity(): ?array
    {
        return $this->security;
    }

    /**
     * @param string[][][] $security
     *
     * @return self
     */
    public function setSecurity(?array $security): self
    {
        $this->security = $security;

        return $this;
    }

    /**
     * @return BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[]
     */
    public function getSecurityDefinitions(): ?\ArrayObject
    {
        return $this->securityDefinitions;
    }

    /**
     * @param BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[] $securityDefinitions
     *
     * @return self
     */
    public function setSecurityDefinitions(?\ArrayObject $securityDefinitions): self
    {
        $this->securityDefinitions = $securityDefinitions;

        return $this;
    }

    /**
     * @return Tag[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return ExternalDocs
     */
    public function getExternalDocs(): ?ExternalDocs
    {
        return $this->externalDocs;
    }

    /**
     * @param ExternalDocs $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs): self
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }
}