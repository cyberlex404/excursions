<?php

/**
 * @file
 * Contains excursion.page.inc.
 *
 * Page callback for Excursion entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Excursion templates.
 *
 * Default template: excursion.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_excursion(array &$variables) {
  // Fetch Excursion Entity Object.
  $excursion = $variables['elements']['#excursion'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
