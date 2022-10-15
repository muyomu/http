<?php

namespace muyomu\http\client;

interface ResponseClient
{
    public function setHeader(string $header):void;

    public function DoResponse():void;
}