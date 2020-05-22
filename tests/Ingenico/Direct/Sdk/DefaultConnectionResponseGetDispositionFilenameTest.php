<?php
namespace Ingenico\Direct\Sdk;

/**
 * @group default_connection
 *
 */
class DefaultConnectionResponseGetDispositionFilenameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dispositionFilenameProvider
     * @param $headerValue
     * @param $expected
     */
    public function testGetDispositionFilename($headerValue, $expected)
    {
        $headers = array('Content-Disposition' => $headerValue);
        $this->assertEquals($expected, DefaultConnectionResponse::getDispositionFilename($headers));
    }

    public function  dispositionFilenameProvider()
    {
        return array(
            array('attachment; filename=testfile',   'testfile'),
            array('attachment; filename="testfile"', 'testfile'),
            array('attachment; filename="testfile',  '"testfile'),
            array('attachment; filename=testfile"',  'testfile"'),
            array("attachment; filename='testfile'", 'testfile'),
            array("attachment; filename='testfile",  "'testfile"),
            array("attachment; filename=testfile'",  "testfile'"),

            array('filename=testfile',   'testfile'),
            array('filename="testfile"', 'testfile'),
            array('filename="testfile',  '"testfile'),
            array('filename=testfile"',  'testfile"'),
            array("filename='testfile'", 'testfile'),
            array("filename='testfile",  "'testfile"),
            array("filename=testfile'",  "testfile'"),
            array('attachment; filename=testfile; x=y',   'testfile'),
            array('attachment; filename="testfile"; x=y', 'testfile'),
            array('attachment; filename="testfile; x=y',  '"testfile'),
            array('attachment; filename=testfile"; x=y',  'testfile"'),
            array("attachment; filename='testfile'; x=y", 'testfile'),
            array("attachment; filename='testfile; x=y",  "'testfile"),
            array("attachment; filename=testfile'; x=y",  "testfile'"),

            array('', null),
            array('filename="', '"'),
            array("filename='", "'")
        );
    }
}
