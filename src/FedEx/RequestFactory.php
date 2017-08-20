<?php

namespace FedEx;

class RequestFactory
{
    public static function createRequest(AbstractRequest $request, $method)
    {
        $reflectionClass = new \ReflectionClass($request);

        $methods = [];

        foreach ($reflectionClass->getMethods() as $method) {
            if (get_class($request) == $method->class) {
                $methods[] = $method->name;
            }
        }

        var_dump($methods);

        var_dump($request->getSoapClient()->__getFunctions());

    }
}
