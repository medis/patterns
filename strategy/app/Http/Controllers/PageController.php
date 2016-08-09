<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Report;
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
    //$html_report = new Report($title, $text, new HtmlReport());
    //$html_report->output_report();

    // Plain text output.
    $plain_report = new Report($title, $text, new PlainTextReport());
    $plain_report->output_report();
  }
}
