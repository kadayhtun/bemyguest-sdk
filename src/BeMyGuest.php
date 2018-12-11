<?php

namespace BmgApiV2Lib;

use BadMethodCallException;
use Illuminate\Support\Str;
use BmgApiV2Lib\Http\HttpCallBack;

class BeMyGuest
{
    protected $client;

    protected $afterRequestHook;

    protected $beforeRequestHook;

    protected $name;

    /**
     * Initialise with authentication and environment.
     *
     * @param string $xAuthorization
     * @param string $environment
     *
     * @return void
     */
    public function __construct($xAuthorization = null, $environment = null)
    {
        Configuration::$environment = $environment ?? Environments::DEMO;

        $this->client = new BmgApiV2Client($xAuthorization);
    }

    public function name()
    {
        return $this->name;
    }

    public function setDefaultAfterRequestHook(callable $afterRequestHook)
    {
        $this->afterRequestHook = $afterRequestHook;

        return $this;
    }

    public function setDefaultBeforeRequestHook(callable $beforeRequestHook)
    {
        $this->beforeRequestHook = $beforeRequestHook;

        return $this;
    }

    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3) === 'get'
            ? $name
            : 'get' . ucfirst($name);

        $this->name = Str::snake(ltrim($method, 'get'));

        if (method_exists($this->client, $method)) {
            $controller = $this->client->$method();
            return $this->attachHttpCallback($controller, $arguments);
        }

        throw new BadMethodCallException();
    }


    protected function attachHttpCallback($controller, array $callbacks)
    {
        $controller->setHttpCallBack(
            $this->findHttpCallback($callbacks)
        );

        return $controller;
    }

    protected function findHttpCallback(array $callbacks)
    {
        if (! $callbacks) {
            return $this->getDefaultRequestHooks();
        }

        // If only a single callable argument is passed,
        // we will assumes as it is callback for after requested,
        // which contains both request & response as HTTP context.
        if (count($callbacks) === 1 && is_callable($callbacks[0])) {
            return (new HttpCallBack())->setOnAfterRequest($callbacks[0]);
        }

        // If two callbacks provided, we will register as both
        // before and after request hook.
        if (isset($callbacks[0]) && is_callable($callbacks[0])
            && isset($callbacks[1]) && is_callable($callbacks[1])
        ) {
            return new HttpCallBack($callbacks[0], $callbacks[1]);
        }

        // Finally, we will consider string indexes, we will match them
        //  with 'before'and 'after' and feed them respectively.
        $httpCallback = new HttpCallBack();

        if (isset($callbacks['before']) && is_callable($callbacks['before'])) {
            $httpCallback->setOnBeforeRequest($callbacks['before']);
        }

        if (isset($callbacks['after']) && is_callable($callbacks['after'])) {
            $httpCallback->setOnAfterRequest($callbacks['after']);
        }

        return $httpCallback;
    }

    protected function getDefaultRequestHooks()
    {
        $httpCallback = new HttpCallBack();

        if (is_callable($this->beforeRequestHook)) {
            $httpCallback->setOnBeforeRequest($this->beforeRequestHook);
        }

        if (is_callable($this->afterRequestHook)) {
            $httpCallback->setOnAfterRequest($this->afterRequestHook);
        }

        return $httpCallback;
    }
}
