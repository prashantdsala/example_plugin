<?php

declare(strict_types = 1);

namespace Drupal\example_plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\example_plugin\Attribute\Importer;

/**
 * Importer plugin manager.
 */
final class ImporterPluginManager extends DefaultPluginManager {

  /**
   * Constructs the object.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/Importer', $namespaces, $module_handler, ImporterInterface::class, Importer::class, 'Drupal\example_plugin\Annotation\Importer');
    $this->alterInfo('importer_info');
    $this->setCacheBackend($cache_backend, 'importer_plugins');
  }

}
