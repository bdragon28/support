<?php
/**
 * @file
 * Contains \Drupal\support\Tests\SupportBasicTest.
 */
namespace Drupal\support\Tests;

use Drupal\support\WebTestBase;

/**
 * Tests the basic support integration functionality.
 *
 * @group support
 *
 * @codeCoverageIgnore
 */
class SupportBasicTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('support');

  /**
   * The basic functionality of the support module.
   */
  public function testBasicSupportFunctionality() {
    // Test that the front page exists.
    $this->drupalGet('<front>');
    $this->assertResponse(200, 'Front page exists.');
    $this->assertRaw('Drupal');

    // Test that login works.
    $admin_user = $this->drupalCreateUser(array('access content'));
    $this->drupalLogin($admin_user);
  }
}

