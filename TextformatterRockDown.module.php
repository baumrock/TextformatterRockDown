<?php

namespace ProcessWire;

/**
 * @author Bernhard Baumrock, 31.01.2023
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class TextformatterRockDown extends Textformatter
{
  public static function getModuleInfo()
  {
    return [
      'title' => 'RockDown: Markdown-like Textformatter for Headlines',
      'version' => '1.3.0',
      'summary' => 'ProcessWire Textformatter for simple markdown style text formatting (*bold*, _italic_, ~strike~, ```mono```)',
    ];
  }

  public function format(&$str) 
  {
    $start = "(?<=^|\\s)"; // lookbehind for start or whitespace
    $end = "(?=\\s|$)"; // lookahead for whitespace or end
    $str = preg_replace("/$start\\*(.*?)\\*$end/", "<strong>$1</strong>", $str);
    $str = preg_replace("/$start\\_(.*?)\\_$end/", "<em>$1</em>", $str);
    $str = preg_replace("/$start~(.*?)~$end/", "<s>$1</s>", $str);
    $str = preg_replace("/$start```(.*?)```$end/", "<tt>$1</tt>", $str);
    $str = preg_replace("/$start#(.*?)#$end/", "<tt>$1</tt>", $str);
    $str = $this->replace($str, $start, $end);
 }

  /**
   * Add hookable replace method
   */
  public function ___replace($str, $start, $end)
  {
    return $str;
  }
}
