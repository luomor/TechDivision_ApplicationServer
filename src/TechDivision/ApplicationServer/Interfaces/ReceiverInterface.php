<?php
/**
 * TechDivision\ApplicationServer\Interfaces\ReceiverInterface
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Interfaces
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Interfaces;

/**
 * Interface ReceiverInterface
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Interfaces
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
interface ReceiverInterface
{
    
    /**
     * Starts the receiver in an infinite loop.
     * 
     * @return boolean TRUE if the receiver has been started successfully, else FALSE
     */
    public function start();
    
    /**
     * Returns the maximum number of workers to start.
     * 
     * @return integer The maximum worker number 
     */
    public function getWorkerNumber();
    
    /**
     * Returns the IP address to listen to.
     * 
     * @return string The IP address to listen to
     */
    public function getAddress();
    
    /**
     * Returns the port to listen to.
     * 
     * @return integer The port to listen to
     */
    public function getPort();
    
    /**
     * Returns the worker class name to use.
     * 
     * @return string The worker class name 
     */
    public function getWorkerType();
    
    /**
     * Returns the thread class name to use.
     * 
     * @return string The thread class name 
     */
    public function getThreadType();
}
