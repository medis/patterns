<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HtmlReport;
use App\Http\Controllers\PlainTextReport;

class PageController extends Controller
{
  public function index() {
    $title = 'Monthly Report';
    $text = [
      'Things are going',
      'really, really well.'
    ];
    // Html output.
    //$html_report = new HtmlReport($title, $text);
    //$html_report->output_report();

    // Plain text output.
    $html_report = new PlainTextReport($title, $text);
    $html_report->output_report();
  }
}
