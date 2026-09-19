<?php
/**
 * 配置，密室
 */

use Laravel\Sanctum\Sanctum;

return [

    /*
    |--------------------------------------------------------------------------
    | Stateful Domains	有状态的域
    |--------------------------------------------------------------------------
    |
    | Requests from the following domains / hosts will receive stateful API
    | authentication cookies. Typically, these should include your local
    | and production domains which access your API via a frontend SPA.
	| 来自以下域/主机的请求将接收有状态API身份验证cookie。
	| 通常情况下,这些应该包括您的本地|和生产域,通过前端的SPA访问您的API。
    |
    */

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
        Sanctum::currentApplicationUrlWithPort()
    ))),

    /*
    |--------------------------------------------------------------------------
    | Sanctum Guards	Sanctum 守卫
    |--------------------------------------------------------------------------
    |
    | This array contains the authentication guards that will be checked when
    | Sanctum is trying to authenticate a request. If none of these guards
    | are able to authenticate the request, Sanctum will use the bearer
    | token that's present on an incoming request for authentication.
	| 这个数组包含了在圣所试图验证请求时将检查的身份验证警卫。
	| 如果这些警卫中没有一个能够对请求进行身份验证,那么圣本将使用在传入请求进行身份验证的持牌人牌。
    |
    */

    'guard' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Expiration Minutes	终结分钟
    |--------------------------------------------------------------------------
    |
    | This value controls the number of minutes until an issued token will be
    | considered expired. If this value is null, personal access tokens do
    | not expire. This won't tweak the lifetime of first-party sessions.
	| 此值控制记录数,直到被认为过期。
	| 如果此值为null,则个人访问令牌不会过期。这不会改变first-party会话的生命周期。
    |
    */

    'expiration' => null,

    /*
    |--------------------------------------------------------------------------
    | Sanctum Middleware	Sanctum 中间件
    |--------------------------------------------------------------------------
    |
    | When authenticating your first-party SPA with Sanctum you may need to
    | customize some of the middleware Sanctum uses while processing the
    | request. You may change the middleware listed below as required.
	| 当对您的第一党SPA进行认证时,您可能需要在处理请求时定制一些中间件所使用的中间件。
	| 您可以根据需要更改下面列出的中间件。
    |
    */

    'middleware' => [
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
    ],

];
