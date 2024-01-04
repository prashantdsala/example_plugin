<?php

namespace Drupal\example_plugin\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines an Importer attribute object.
 *
 * Plugin Namespace: Plugin\Importer.
 *
 * @see \Drupal\example_plugin\ImporterInterface
 * @see \Drupal\example_plugin\ImporterPluginManager
 * @see \Drupal\example_plugin\ImporterPluginBase
 * @see \Drupal\example_plugin\Plugin\Importer\CSVImporter
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Importer extends Plugin {

  /**
   * Constructs an Importer attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $label
   *   The title of the importer.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   A description of the importer.
   */
  public function __construct(
    public readonly string $id,
    public readonly ?TranslatableMarkup $label = NULL,
    public readonly ?TranslatableMarkup $description = NULL,
  ) {}

}
