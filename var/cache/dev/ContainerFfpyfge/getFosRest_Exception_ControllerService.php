<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_rest.exception.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ExceptionController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Util\\ExceptionValueMap.php';

return $this->services['fos_rest.exception.controller'] = new \FOS\RestBundle\Controller\ExceptionController(${($_ = isset($this->services['fos_rest.view_handler']) ? $this->services['fos_rest.view_handler'] : $this->load('getFosRest_ViewHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.exception.codes_map']) ? $this->services['fos_rest.exception.codes_map'] : ($this->services['fos_rest.exception.codes_map'] = new \FOS\RestBundle\Util\ExceptionValueMap([]))) && false ?: '_'}, true);