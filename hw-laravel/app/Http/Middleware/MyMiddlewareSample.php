<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddlewareSample
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo "<br><b>Before request</b><br>";

        $response=$next($request);

        //var_dump($response->headers);

        echo "<br><b> -- response headers: </b>" . $response->headers;

        //$response->header('Cache-Control', 'no-cache, must-revalidate');

        $responseContent = $response->getOriginalContent();

        echo "<br><b> -- response content: </b>" . $responseContent;

        $response->setContent($responseContent . " overwriting content !!!");

        echo "<br><br><b>Before response (changing response)</b><br>";

        return $response;        
    }
}
