<?php

namespace muyomu\http;

use muyomu\http\client\ResponseClient;

class Response implements ResponseClient
{
    /*
     * 内部数据库
     */
    private Request $request;

    /**
     * @param Request $request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    public function setHeader(string $header):void
    {
        header($header);
    }

    public function DoResponse(): void
    {
        // TODO: Implement DoResponse() method.
    }
}