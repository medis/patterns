<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Report;

class HtmlReport extends Report
{
  public function __construct($title, $text) {
    $this->title = $title;
    $this->text = $text;
  }

  protected function output_start() {
    print '<html>';
  }

  protected function output_head() {
    print '<head>';
    print "<title>{$this->title}</title>";
    print '</head>';
  }

  protected function output_body_start() {
    print '<body>';
  }

  protected function output_line($line) {
    print "<p>{$line}</p>";
  }

  protected function output_body_end() {
    print '<body>';
  }

  protected function output_end() {
    print '</html>';
  }
}
