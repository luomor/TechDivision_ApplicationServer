<?php

/**
 * TechDivision\ApplicationServer\Api\Node\InstallationNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer a the installation information.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class InstallationNode extends AbstractNode
{

    /**
     * The installation steps.
     *
     * @var array
     * @AS\Mapping(nodeName="steps/step", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\StepNode")
     */
    protected $steps;

    /**
     * Returns the installation step.
     *
     * @return array
     */
    public function getSteps()
    {
        return $this->steps;
    }
}
