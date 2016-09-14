<?php

/**
 * A simple class
 *
 * This is the long description for this class,
 * which can span as many lines as needed. It is
 * not required, whereas the short description is
 * necessary.
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author Jason Lengstorf <jason.lengstorf@ennuidesign.com>
 * @copyright 2010 Ennui Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class testClass {
  /**
   * A public variable
   *
   * @var string stores data for the class
   */
  public $prop1 = "I'm a class property!";

  public static $count = 0;

  /**
   * Sets $foo to a new value upon class instantiation.
   *
   * @param string $val a value required for the class
   * @return void
   */
  public function __construct() {
    echo 'The class "', __CLASS__, '" was initiated!<br />';
  }

  public function __destruct() {
    echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }

  public function __toString() {
    echo "Using the toString method: ";
    return $this->getProperty();
  }

  public function setProperty($newval) {
    $this->prop1 = $newval;
  }

  private function getProperty() {
    return $this->prop1 . "<br />";
  }

  public static function plusOne() {
    return "The count is " . ++self::$count . ".<br />";
  }

  /**
   * Multiplies two integers
   *
   * Accepts a pair of integers and returns the
   * product of the two.
   *
   * @param int $bat a number to be multiplied
   * @param int $baz a number to be multiplied
   * @return int the product of the two parameters
   */
  public function bar($bat, $baz)
  {
    return $bat * $baz;
  }
}

do {
  // Call plusOne without instantiating MyClass
  echo MyClass::plusOne();
} while (MyClass::$count < 10);