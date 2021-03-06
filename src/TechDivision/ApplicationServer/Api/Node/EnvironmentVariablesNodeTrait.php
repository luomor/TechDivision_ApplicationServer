<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php
 *             Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * TechDivision\ApplicationServer\Api\Node\EnvironmentVariablesNodeTrait
 *
 * This trait is used to give any node class the possibility to manage environmentVariable nodes
 * which might be child elements of it.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php
 *             Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
trait EnvironmentVariablesNodeTrait
{
    
    /**
     * The environment variables specified within the parent node
     *
     * @var array
     * @AS\Mapping(nodeName="environmentVariables/environmentVariable", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\EnvironmentVariableNode")
     */
    protected $environmentVariables = array();

    /**
     * Will return the environment variables array.
     *
     * @return array The array with the environment variables
     */
    public function getEnvironmentVariables()
    {
        return $this->environmentVariables;
    }

    /**
     * Will return the environmentVariable node with the specified definition and if nothing could
     * be found we will return false.
     *
     * @param string $definition The definition of the environmentVariable in question
     *
     * @return \TechDivision\ApplicationServer\Api\Node\EnvironmentVariableNode|boolean The requested environmentVariable node
     */
    public function getEnvironmentVariable($definition)
    {
        // Iterate over all environmentVariables
        foreach ($this->getEnvironmentVariables() as $environmentVariableNode) {

            // If we found one with a matching definition we will return it
            if ($environmentVariableNode->getDefinition() === $definition) {

                return $environmentVariableNode;
            }
        }

        // Still here? Seems we did not find anything
        return false;
    }

    /**
     * Returns the environmentVariables as an associative array.
     *
     * @return array The array with the sorted environmentVariables
     */
    public function getEnvironmentVariablesAsArray()
    {
        // Iterate over the environmentVariable nodes and sort them into an array
        $environmentVariables = array();
        foreach ($this->getEnvironmentVariables() as $environmentVariableNode) {

            // Restructure to an array
            $environmentVariables[] = array(
                'condition' => $environmentVariableNode->getCondition(),
                'definition' => $environmentVariableNode->getDefinition()
            );
        }

        // Return what we got
        return $environmentVariables;
    }
}
