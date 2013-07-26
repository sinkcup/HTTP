<?php
require_once dirname(__FILE__) . '/../src/HTTP/Request.php';
require_once dirname(__FILE__) . '/../src/HTTP/Response.php';
class HTTPTest extends PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $http = new HTTP_Request('https://api.douban.com/v2/movie/subject/1298183');
        $http->setMethod(HTTP_Request::HTTP_GET);
        $http->sendRequest();
        $r =  new HTTP_Response ( $http->getResponseHeader() , $http->getResponseBody (), $http->getResponseCode () );
        var_dump($r->body);
        $this->assertEquals('200', $r->status);
    }
}
