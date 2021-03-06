<?php
namespace Xiag\Rql\Parser\Node\Query\LogicalOperator;

use Xiag\Rql\Parser\Node\Query\AbstractLogicalOperatorNode;

/**
 * @codeCoverageIgnore
 */
class NotNode extends AbstractLogicalOperatorNode
{
    /**
     * @inheritdoc
     */
    public function getNodeName()
    {
        return 'not';
    }
}
