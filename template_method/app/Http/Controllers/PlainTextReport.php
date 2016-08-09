<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Report;

class PlainTextReport extends Report
{
  public function __construct($title, $text) {
    $this->title = $title;
    $this->text = $text;
  }

  protected function output_start() {}

  protected function output_head() {
    print "**** {$this->title} ****<br/>";
  }

  protected function output_body_start() {}

  protected function output_line($line) {
    print "{$line}<br/>";
  }

  protected function output_body_end() {}

  protected function output_end() {}
}
