<?php

/**
 * @file
 * Contains guide.page.inc.
 *
 * Page callback for Guide entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Guide templates.
 *
 * Default template: guide.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_guide(array &$variables) {
  // Fetch Guide Entity Object.
  $guide = $variables['elements']['#guide'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
