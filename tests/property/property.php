<?php

class Foo
{
    var $var0 = 'foo';
    public $var1 = 'hello ' . 'world';
    public $var1_0 = 'veryVeryVeryVeryVeryLongString ' . 'veryVeryVeryVeryVeryLongString';
    public $var1_1 = 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString ' . 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';
    public $var2 = <<<EOD
hello world
EOD;
    public $var3 = 1+2;
    public $var6 = myConstant;
    public $var7 = array(true, false);
    public $var7_1 = [true, false];
    public $var7_2 = ['key' => 'value', 'other_key' => 'other_value'];
    public $var7_3 = ['very_very_very_long_key' => 'very_very_very_long_value', 'very_very_very_long_other_key' => 'very_very_very_long_other_value'];
    public $var8 = <<<'EOD'
hello world
EOD;
    public $var9 = 11111111111111111111111111111111111111111111111111111111111111111111;
    public $var10 = 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';
    public $var11 = true;
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
    public $prop;
    private static $static_property;
    public static $my_static = 'foo';
    static $my_static_1 = 'foo';
    public static $my_public_static='bar';
}
