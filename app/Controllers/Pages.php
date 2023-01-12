<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'homepage')
    {
        if ( ! is_file(APPPATH.'/Views/pages/User/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
    
        echo view('templates/header', $data);
        echo view('pages/User/'.$page, $data);
        echo view('templates/footer', $data);
    }

    public function admin($page = 'categories')
    {
        if ( ! is_file(APPPATH.'/Views/pages/Admin/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
    
        echo view('templates/admin-header', $data);
        echo view('pages/Admin/'.$page, $data);
        echo view('templates/admin-footer', $data);
    }

    public function women($page = 'women')
    {
        if ( ! is_file(APPPATH.'/Views/pages/User/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
    
        echo view('templates/header', $data);
        echo view('pages/User/'.$page, $data);
        echo view('templates/footer', $data);
    }

}