<?php

namespace Drupal\alter_in_container_compilation;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

class AlterInContainerCompilationServiceProvider extends ServiceProviderBase {

  public function register(ContainerBuilder $container) {
    $container->addCompilerPass(new DemoCompilerPass());
  }

}
