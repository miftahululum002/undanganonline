<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data;
    protected function render($viewname = 'index')
    {
        $this->data['title'] = !empty($this->data['title']) ? $this->data['title'] : 'index';
        $class_name = get_class($this);
        $reflection_class = new \ReflectionClass($class_name);
        $namespace = $reflection_class->getNamespaceName();
        $class = str_replace("$namespace\\", '', $class_name);
        // return view(strtolower($class) . '/' . $viewname, $this->data);
        $this->setDataArguments();
        return view($viewname, $this->data);
    }

    protected function setDataArguments()
    {
        $debug = env('APP_DEBUG', false);
        $this->data['debug'] = $debug;
        $this->data['requiredLabel'] = '<span class="text-danger"><b>*</b></span>';
    }

    protected function authentication()
    {
    }
}
