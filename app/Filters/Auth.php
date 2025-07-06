<?php
namespace APP\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FiltersInterface;

class Auth implements FiltersInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		if(!session()->get('logged_in')){
			return redirect()->to('/login');
		}
	}
	public funcion after(RequestInterface $request, ResponseInterface $response, $arguments = null){
		
	}
}