<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.popupMenu.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:32.
*/

class classXmlForm_Field_popupOptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var XmlForm_Field_popupOption
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $attributes = array("type" => "input");
        $xmlNode    = new Xml_Node("node1", "type1", "value1", $attributes);

        $this->object = new XmlForm_Field_popupOption($xmlNode);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('XmlForm_Field_popupOption');
        $this->assertTrue(count($methods) == 25);
    }

    /**
    * @covers XmlForm_Field_popupOption::getEvents
    * @todo   Implement testgetEvents().
    */
    public function testgetEvents()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getEvents', $methods ), 'exists method getEvents' );
        $r = new ReflectionMethod('XmlForm_Field_popupOption', 'getEvents');
        $params = $r->getParameters();
    }
}

