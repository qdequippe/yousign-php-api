<?php

declare(strict_types=1);

namespace Qdequippe\Yousign\Api\Model;

class SignatureUiInputUpdateRedirectCancel
{
    /**
     * Url of redirect.
     *
     * @var string|null
     */
    protected $url;
    /**
     * target of the redirection.
     *
     * @var string|null
     */
    protected $target = '_top';
    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     *
     * @var bool|null
     */
    protected $auto;

    /**
     * Url of redirect.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Url of redirect.
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * target of the redirection.
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * target of the redirection.
     */
    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     */
    public function getAuto(): ?bool
    {
        return $this->auto;
    }

    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     */
    public function setAuto(?bool $auto): self
    {
        $this->auto = $auto;

        return $this;
    }
}
