<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // home page

    public function index() {

        SEOTools::setTitle('Welcome');
        SEOTools::setDescription('Discover comprehensive turnkey solutions in telecommunications, energy services, and enterprise management systems');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(config('app.url').'/images/resource/about-44.jpg');

        OpenGraph::addImage(['url' => config('app.url').'/images/resource/about-44.jpg', 'size' => 300]);
        OpenGraph::addImage(config('app.url').'/images/resource/about-44.jpg', ['height' => 300, 'width' => 300]);


        return view('home');
    }

    public function about() {

        SEOTools::setTitle('About-Us');
        SEOTools::setDescription('Discover comprehensive turnkey solutions in telecommunications, energy services, and enterprise management systems');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(config('app.url').'/images/resource/about-44.jpg');

        OpenGraph::addImage(['url' => config('app.url').'/images/resource/about-44.jpg', 'size' => 300]);
        OpenGraph::addImage(config('app.url').'/images/resource/about-44.jpg', ['height' => 300, 'width' => 300]);


        return view('about');
    }

    public function contact() {

        SEOTools::setTitle('Contac-Us');
        SEOTools::setDescription('Discover comprehensive turnkey solutions in telecommunications, energy services, and enterprise management systems');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(config('app.url').'/images/resource/about-44.jpg');

        OpenGraph::addImage(['url' => config('app.url').'/images/resource/about-44.jpg', 'size' => 300]);
        OpenGraph::addImage(config('app.url').'/images/resource/about-44.jpg', ['height' => 300, 'width' => 300]);


        return view('contact');
    }

    public function projects() {

        SEOTools::setTitle('Our Portfolio');
        SEOTools::setDescription('Discover comprehensive turnkey solutions in telecommunications, energy services, and enterprise management systems');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(config('app.url').'/images/resource/about-44.jpg');

        OpenGraph::addImage(['url' => config('app.url').'/images/resource/about-44.jpg', 'size' => 300]);
        OpenGraph::addImage(config('app.url').'/images/resource/about-44.jpg', ['height' => 300, 'width' => 300]);


        return view('projects');
    }

    public function services() {


        return view('services');
    }

    public function blog() {


        return view('blog');
    }

    public function post() {


        return view('post');
    }
}
