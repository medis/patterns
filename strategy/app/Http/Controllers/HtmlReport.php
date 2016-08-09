<?php

namespace App\Http\Controllers;

class HtmlReport
{
  public function output_report($context) {
    print '<html>';
    print '<head>';
    print "<title>{$context->title}</title>";
    print '</head>';
    print '<body>';
    foreach ($context->text as $line) {
      print "<p>{$line}</p>";
    }
    print '</body>';
    print '</html>';
  }
}
