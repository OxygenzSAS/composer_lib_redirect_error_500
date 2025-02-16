<?php

namespace OxygenzSAS\RedirectErrorPage;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RedirectErrorPage implements MiddlewareInterface
{

    /**
     * @var String
     */
    private $url;

    public function __construct(String|null $url = null) {
        $this->url = $url ?? '/500';
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        try {
            $response = $handler->handle($request);
        } catch (\Throwable $exception) {
            header("Location: ".$this->url);
            die();
        }

        return $response;
    }
}