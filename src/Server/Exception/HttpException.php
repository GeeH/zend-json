<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Json
 * @subpackage Server
 */

namespace Zend\Json\Server\Exception;

/**
 * Thrown by Zend_Json_Server_Client when an HTTP error occurs during an
 * JSON-RPC method call.
 *
 * @category   Zend
 * @package    Zend_Json
 * @subpackage Server
 */
class HttpException extends RuntimeException
{}
