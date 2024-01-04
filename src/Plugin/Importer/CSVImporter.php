<?php

namespace Drupal\example_plugin\Plugin\Importer;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\example_plugin\Attribute\Importer;
use Drupal\example_plugin\ImporterPluginBase;

/**
 * Imports a CSV file.
 */
#[Importer(
  id: 'csv_importer',
  label: new TranslatableMarkup('CSV Importer'),
  description: new TranslatableMarkup('Import content from CSV file.'),
)]
class CSVImporter extends ImporterPluginBase {

}
