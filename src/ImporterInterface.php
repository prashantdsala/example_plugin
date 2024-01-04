<?php

declare(strict_types = 1);

namespace Drupal\example_plugin;

/**
 * Interface for importer plugins.
 */
interface ImporterInterface {

  /**
   * Returns the translated plugin label.
   */
  public function label(): string;

  /**
   * Returns the translated plugin description.
   */
  public function description(): string;

}
