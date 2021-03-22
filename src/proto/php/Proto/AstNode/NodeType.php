<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ast.proto

namespace Proto\AstNode;

/**
 * Protobuf type <code>proto.AstNode.NodeType</code>
 */
class NodeType
{
    /**
     * common types
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * declarations
     *
     * Generated from protobuf enum <code>FUNCTION_DECL = 1;</code>
     */
    const FUNCTION_DECL = 1;
    /**
     * Generated from protobuf enum <code>VARIABLE_DECL = 2;</code>
     */
    const VARIABLE_DECL = 2;
    /**
     * Generated from protobuf enum <code>CLASS_DECL = 3;</code>
     */
    const CLASS_DECL = 3;
    /**
     * references
     *
     * Generated from protobuf enum <code>FUNCTION_DECL_REF_EXPR = 11;</code>
     */
    const FUNCTION_DECL_REF_EXPR = 11;
    /**
     * Generated from protobuf enum <code>VARIABLE_DECL_REF_EXPR = 12;</code>
     */
    const VARIABLE_DECL_REF_EXPR = 12;
    /**
     * Generated from protobuf enum <code>CLASS_DECL_REF_EXPR = 13;</code>
     */
    const CLASS_DECL_REF_EXPR = 13;
    /**
     **
     * Python node types
     * https://docs.python.org/2/library/ast.html
     * https://docs.python.org/3/library/ast.html
     * https://github.com/python-security/pyt/blob/master/pyt/core/node_types.py
     *
     * Generated from protobuf enum <code>PY_FUNCTION_DEF = 101;</code>
     */
    const PY_FUNCTION_DEF = 101;
    /**
     **
     * JavaScript node types
     * https://github.com/Kronuz/esprima-python/blob/master/esprima/syntax.py
     *
     * Generated from protobuf enum <code>JS_ASSIGNMENT_EXPRESSION = 201;</code>
     */
    const JS_ASSIGNMENT_EXPRESSION = 201;
    /**
     **
     * Ruby node types
     * https://github.com/whitequark/parser/blob/master/lib/parser/ruby26.y
     * https://github.com/whitequark/parser/blob/master/lib/parser/ast/processor.rb
     *
     * Generated from protobuf enum <code>RB_REGULAR_NODE = 301;</code>
     */
    const RB_REGULAR_NODE = 301;
    /**
     * Generated from protobuf enum <code>RB_VARIABLE_NODE = 302;</code>
     */
    const RB_VARIABLE_NODE = 302;
    /**
     **
     * Java node types
     * https://github.com/Sable/soot/blob/develop/src/main/generated/jastadd/soot/JastAddJ/ASTNode.java
     *
     * Generated from protobuf enum <code>JAVA_IDENTITY_STMT = 401;</code>
     */
    const JAVA_IDENTITY_STMT = 401;
    /**
     **
     * Php node types
     * https://github.com/nikic/PHP-Parser/blob/master/grammar/php5.y
     * https://github.com/nikic/PHP-Parser/blob/master/grammar/php7.y
     *
     * Generated from protobuf enum <code>PHP_EXPR_VARIABLE = 501;</code>
     */
    const PHP_EXPR_VARIABLE = 501;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NodeType::class, \Proto\AstNode_NodeType::class);
