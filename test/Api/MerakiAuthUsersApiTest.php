<?php
/**
 * MerakiAuthUsersApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Meraki Dashboard API
 *
 * A RESTful API to programmatically manage and monitor Cisco Meraki networks at scale.  > Date: 02 April, 2025 > > [Recent Updates](https://meraki.io/whats-new/)  ---  [API Documentation](https://meraki.io/api)  [Community Support](https://meraki.io/community)  [Meraki Homepage](https://www.meraki.com)
 *
 * The version of the OpenAPI document: 1.57.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Meraki\Test\Api;

use \Meraki\Configuration;
use \Meraki\ApiException;
use \Meraki\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * MerakiAuthUsersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Meraki
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MerakiAuthUsersApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createNetworkMerakiAuthUser
     *
     * Authorize a user configured with Meraki Authentication for a network (currently supports 802.1X, splash guest, and client VPN users, and currently, organizations have a 50,000 user cap).
     *
     */
    public function testCreateNetworkMerakiAuthUser()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for deleteNetworkMerakiAuthUser
     *
     * Delete an 802.1X RADIUS user, or deauthorize and optionally delete a splash guest or client VPN user..
     *
     */
    public function testDeleteNetworkMerakiAuthUser()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getNetworkMerakiAuthUser
     *
     * Return the Meraki Auth splash guest, RADIUS, or client VPN user.
     *
     */
    public function testGetNetworkMerakiAuthUser()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getNetworkMerakiAuthUsers
     *
     * List the authorized users configured under Meraki Authentication for a network (splash guest or RADIUS users for a wireless network, or client VPN users for a MX network).
     *
     */
    public function testGetNetworkMerakiAuthUsers()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateNetworkMerakiAuthUser
     *
     * Update a user configured with Meraki Authentication (currently, 802.1X RADIUS, splash guest, and client VPN users can be updated).
     *
     */
    public function testUpdateNetworkMerakiAuthUser()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
