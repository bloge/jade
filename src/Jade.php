<?php

namespace Bloge\Renderers;

use Jade\Jade as JadePHP;

/**
 * JadeRenderer adapter
 * 
 * @package bloge/jade
 */
class Jade implements IRenderer
{
    /**
     * @var \Jade\Jade $jade
     */
    protected $jade;
    
    /**
     * @var string $path
     */
    protected $path;
    
    /**
     * @param string $path
     * @param string $cache
     */
    public function __construct($path, $cache = '')
    {
        $this->path = $path;
        $this->jade = new JadePHP([
            'prettyprint' => true,
            'cache'       => $cache
        ]);
    }
    
    /**
     * @return \Jade\Jade
     */
    public function jade()
    {
        return $this->jade;
    }
    
    /**
     * @{inheritDoc}
     */
    public function partial($view, array $data = [])
    {
        return $this->jade->render("{$this->path}/$view", $data);
    }
    
    /**
     * @{inheritDoc}
     */
    public function render(array $data = [])
    {
        $view = isset($data['view']) ? $data['view'] : '';
        
        return $this->partial($view, $data);
    }
}