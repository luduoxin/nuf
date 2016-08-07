<?php

class View
{
    const VIEW_PATH = [BASE_PATH.'/app/views'];
    const CACHE_PATH = BASE_PATH.'/cache';

    public static function getView(){
        $compiler = new \Xiaoler\Blade\Compilers\BladeCompiler(self::CACHE_PATH);
        $engine = new \Xiaoler\Blade\Engines\CompilerEngine($compiler);
        $finder = new \Xiaoler\Blade\FileViewFinder(self::VIEW_PATH);
        $factory = new \Xiaoler\Blade\Factory($engine,$finder);
        return $factory;
    }
    
    
}