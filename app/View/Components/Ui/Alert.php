<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function typeClass()
    {
        if ($this->type === 'error') {
            return 'bg-red-200 text-red-700';
        }

        return 'bg-green-200 text-green-700';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.alert');
    }
}
