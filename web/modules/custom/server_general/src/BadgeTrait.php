<?php

declare(strict_types=1);

namespace Drupal\server_general;

/**
 * Helper methods for wrapping element inside badge.
 */
trait BadgeTrait {

  /**
   * Wrap element inside a rounded corner badge.
   *
   * @param string $item
   *   Badge text content e.g. role like "admin" etc.
   *
   * @param string $color
   *   Badge color.
   *
   * @return array
   *   Themed badge render array.
   */
  protected function wrapElementRoundedBadge(string $item, string $color): array {
    return [
      '#theme' => 'server_theme_badge',
      '#color' => $color,
      '#item' => $item,
    ];
  }

}
