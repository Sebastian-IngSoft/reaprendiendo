<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $typeComponent;
     
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
              $typeComponent = 'p-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
              break;
            case 'danger':
            $typeComponent = 'p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
              
              break;
            case 'success':
            $typeComponent = 'p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-grenn-400';
            
              break;
              
          }
        $this->typeComponent = $typeComponent;     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
