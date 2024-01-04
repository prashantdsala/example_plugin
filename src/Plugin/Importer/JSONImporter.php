<?php

declare(strict_types = 1);

namespace Drupal\example_plugin\Plugin\Importer;

use Drupal\example_plugin\ImporterPluginBase;

/**
 * Plugin implementation of the importer.
 *
 * @Importer(
 *   id = "json_importer",
 *   label = @Translation("JSON importer"),
 *   description = @Translation("Import content from JSON file.")
 * )
 */
final class JSONImporter extends ImporterPluginBase {

}
