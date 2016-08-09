<?php

namespace App\Http\Controllers;

class Report
{
  public $title;
  public $text;
  public $formatter;

  public function __construct($title, $text, $formatter) {
    $this->title = $title;
    $this->text = $text;
    $this->formatter = $formatter;
  }

  public function output_report() {
    $this->formatter->output_report($this);
  }
}
