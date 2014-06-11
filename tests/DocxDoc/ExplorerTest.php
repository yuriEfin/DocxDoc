<?php
/**
 * This file is part of DocxDoc, a collection of utilities to parse or
 * manipulate OOXML DOCX. DocxDoc is a free software distributed under MIT
 * License. For the full copyright and license information, please view the
 * LICENSE file.
 */

namespace DocxDoc;

use DocxDoc\Explorer;

/**
 * Tests for DocxDoc\Explorer
 */
class ExplorerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test parsePackage
     */
    public function testParsePackage()
    {
        $filename = __DIR__ . '/../resources/doc.docx';
        $explorer = new Explorer($filename);
        $files = $explorer->parsePackage();

        $this->assertEquals(27, count($files));
    }
}
