<?php

namespace Drupal\alter_in_container_compilation;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DemoCompilerPass implements CompilerPassInterface {

  /**
   * {@inheritDoc}
   */
  public function process(ContainerBuilder $container) {
    // The module handler is prepared in a previous pass, so we can make use of
    // it.
    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $module_handler */
    $module_handler = $container->get('module_handler');

    $module_handler->invokeAll('some_kind_of_test_alter', ['nothing']);
  }

}
