<?php
declare(strict_types=1);


namespace Crawlzone\Event;

use Psr\Http\Message\RequestInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * @package Crawlzone\Event
 */
class BeforeRequestSent extends Event
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
