<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
    }

    public function home()
    {
        return view('pages.home');
    }

    public function materials()
    {
        return view('pages.materials');
    }

    public function laser()
    {
        return view('pages.laser');
    }

    public function guidelines()
    {

        return view('pages.guidelines');
    }

    public function bendingcal()
    {

        return view('pages.bendingcal');
    }

    public function blog()
    {

        return view('pages.blog');
    }

    public function laserCuttingServices()
    {
        return view('pages.laser-cutting-services');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function bendingservices()
    {
        return view('pages.bending-services');
    }

    public function powderCoatingServices()
    {
        return view('pages.powder-coating-services');
    }

    public function tappingServices()
    {
        return view('pages.tapping-services');
    }

    public function cncRoutingServices()
    {
        return view('pages.cnc-routing-services');
    }

    public function deburring()
    {
        return view('pages.deburring');
    }

    public function materialss()
    {
        return view('pages.materialss');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function examples()
    {
        return view('pages.examples');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function loginnav()
    {
        return view('pages.login-nav');
    }
}
