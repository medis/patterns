<?php

namespace App\Http\Controllers;

abstract class Report
{
  protected $title;
  protected $text;

  /**
   * Output report. Common method.
   */
  public function output_report() {
    $this->output_start();
    $this->output_head();
    $this->output_body_start();
    $this->output_body();
    $this->output_body_end();
    $this->output_end();
  }

 /**
  * Output body part of report.
  */
  protected function output_body() {
    foreach ($this->text as $line) {
      $this->output_line($line);
    }
  }

  /**
   * Output start part of report.
   */
  abstract protected function output_start();

  /**
   * Output head part of report.
   */
  abstract protected function output_head();

  /**
   * Output body start part of report.
   */
  abstract protected function output_body_start();

  /**
   * Output line part of report.
   */
  abstract protected function output_line($line);

  /**
   * Output body end part of report.
   */
  abstract protected function output_body_end();

  /**
   * Output end part of report.
   */
  abstract protected function output_end();
}
