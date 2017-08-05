<?php

namespace Illuminate\Contracts\Routing;

interface UrlRoutable
{
    /**
     * Resolve model instance from value of parameter.
     *
     * @param  string  $paramValue
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function resolve($paramValue);

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey();

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName();
}
