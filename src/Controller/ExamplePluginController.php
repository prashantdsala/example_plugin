<?php declare(strict_types = 1);

namespace Drupal\example_plugin\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Example Plugin routes.
 */
final class ExamplePluginController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {
    // Dependency injection recommended here.
    // For the purpose of example using static method.
    $plugin_manager = \Drupal::service("plugin.manager.importer");
    // Instantiate Annotation based plugin "json_importer".
    $annotation_based_plugin = $plugin_manager->createInstance('json_importer');
    // Instantiate Attribute based plugin "csv_importer".
    $attribute_based_plugin = $plugin_manager->createInstance('csv_importer');

    $build['content']['annotation_based_plugin'] = [
      '#theme' => 'item_list',
      '#list_type' => 'ul',
      '#items' => [
        $annotation_based_plugin->label(),
        $annotation_based_plugin->description(),
      ],
    ];

    $build['content']['attribute_based_plugin'] = [
      '#theme' => 'item_list',
      '#list_type' => 'ul',
      '#items' => [
        $attribute_based_plugin->label(),
        $attribute_based_plugin->description(),
      ],
    ];

    return $build;
  }

}
