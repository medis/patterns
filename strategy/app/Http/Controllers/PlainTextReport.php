<?php

namespace App\Http\Controllers;

class PlainTextReport
{
  public function output_report($context) {
    print "**** {$context->title} ****<br/>";
    foreach ($context->text as $line) {
      print $line . '<br/>';
    }
  }
}
