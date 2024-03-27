<?php

namespace App\Controllers;

use PHPFramework\Controller;

class ContactController extends Controller
{
  public function index()
  {
    $title = 'Страница контактов';
    $name = 'John';
    return view('contact', compact('title', 'name'));
  }

  public function send()
  {
    return 'Contact form POST page';
  }
}