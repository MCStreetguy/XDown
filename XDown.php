<?php

/**
* The main class of XDown.
*
* Copyright 2017 Maximilian Schmidt
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
* associated documentation files (the "Software"), to deal in the Software without restriction, including
* without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to
* the following conditions:
*
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
* TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
* THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
* CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
* DEALINGS IN THE SOFTWARE.
*
* @author Maximilian Schmidt <maximilianschmidt404@gmail.com>
* @copyright 2017, Maximilian Schmidt
* @license https://opensource.org/licenses/MIT  MIT License
* @version v0.0.0
*/

abstract class XDown {

  /**
   * @var array $RULES Defines the RegExp Rules
   */
  private $RULES = array(
    '/^(#{1,6} ?)(.*)/' => 'heading',
    '/(.*)\n(={5,})/' => 'heading1',
    '/(.*)\n(-{5,})/' => 'heading2',
    '/([_*]{2})([^_*\n]{1,})([_*]{2})/' => 'bold',
    '/([_*])([^_*\n]{1,})([_*])/' => 'italic',
    '/(~{2})(.*)(~{2})/' => 'strike',
    '/(!\[)(.*)(\]\()(.*)(\))/' => 'image',
    '/(\[)(.*)(\]\()(.*)(\))/' => 'link',
    '/(<)(.*)(>)/' => 'directlink',
    '/(`)(.*)(`)/' => 'inlinecode',
    '/(`{3}.*\n)([^`]*\n)(`{3})/' => 'codeblock',
    // TODO: Add support for unordered lists
    // TODO: Add support for ordered lists
    // TODO: Add support for blockquotes
    // TODO: Add support for tables
    '/([*\-_]{3,})/' => 'horizontalrule',
    '/( {3,})$/' => 'linebreak',
    '/(\n{2,})/' => 'newparagraph'
  );

  /**
   * Parses a markdown string to HTML.
   *
   * @param string $input The input string to be parsed.
   * @return string The parsed HTML string.
   */
  public static function parse($input) {

    return null;
  }

}

?>
