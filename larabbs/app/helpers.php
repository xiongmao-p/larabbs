<?php

use Illuminate\Support\Facades\Route;

/**
 * 将当前请求的路由名称转换为 CSS 类名称
 * 允许我们针对某个页面做页面样式定制
 * @return array|string|string[]|null
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}