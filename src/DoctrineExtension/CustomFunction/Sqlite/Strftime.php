<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/09/14
 * Time: 16.09
 */

namespace DoctrineExtension\CustomFunction\Sqlite;


use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;

class Strftime extends FunctionNode {

    public $expression;

    public $dateExpression;

    /**
     * @param \Doctrine\ORM\Query\SqlWalker $sqlWalker
     *
     * @return string
     */
    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        return 'STRFTIME('.
            $this->expression->dispatch($sqlWalker).", ".
            $this->dateExpression->dispatch($sqlWalker).
        ")";
    }

    /**
     * @param \Doctrine\ORM\Query\Parser $parser
     *
     * @return void
     */
    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->expression = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->dateExpression = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}