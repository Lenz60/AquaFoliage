<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class JwtFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (!isset($_COOKIE['COOKIE-SESSION'])) {
            return redirect()->to('/login');
        } else {
            //! Header check removed due to saving to cookie session
            // $header = $request->getServer('HTTP_AUTHORIZATION'); 
            try {
                helper('jwt');
                // $encodedToken = getJWT($header);
                //? Automatically detect header from Cookie
                $encodedToken = $_COOKIE['COOKIE-SESSION'];
                // dd($encodedToken);
                validateJWT($encodedToken);
                return $request;
            } catch (Exception $e) {
                return Services::response()->setJson([
                    'error' => $e->getMessage()
                ])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
