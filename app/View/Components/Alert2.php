<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $clases;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct( $title='Alerta',$type='info')
    {
        switch ($type){
            case 'info':
                $clases = 'bg-blue-100 border-blue-500 text-blue-900';
                break;
            case 'danger':
                $clases = 'bg-red-100 border-red-500 text-red-900';
                break;
            case 'warning':
                $clases = 'bg-yellow-100 border-yellow-500 text-yellow-900';
                break;
            case 'success':
                $clases = 'bg-teal-100 border-teal-500 text-teal-900';
                break;
            default:
                $clases = 'bg-blue-100 border-blue-500 text-blue-900';
                break;
        }

        $this->clases=$clases;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
