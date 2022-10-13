<?php

namespace Showable\Showable;

use Illuminate\Http\Request;

class Showable
{
    /**
     * @param  Request  $request
     * @param  array  $dataToShow
     * @param  string  $requestPath
     * @return array
     */
    protected function whenIsSingle(Request $request, array $value = [], string $requestPath = 'show'): array
    {
        $condition = ($request->route('id') || str_contains($request->path(), $requestPath));

        if ((bool) $condition) {
            return $value;
        }

        return [];
    }

    /**
     * @param  bool  $condition
     * @param $callback
     * @param  null  $default
     * @return $this|null
     */
    protected function showWhen(bool $condition, $callback, $default = null): null|static
    {
        if ($condition) {
            return $callback($this) ? $this->merge($callback($this)) : $this;
        } elseif ($default) {
            return $default($this) ?: $this;
        }

        return $this;
    }
}
