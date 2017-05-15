<?php

namespace Drupal\excursions\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Excursion entities.
 *
 * @ingroup excursions
 */
interface ExcursionInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Excursion name.
   *
   * @return string
   *   Name of the Excursion.
   */
  public function getName();

  /**
   * Sets the Excursion name.
   *
   * @param string $name
   *   The Excursion name.
   *
   * @return \Drupal\excursions\Entity\ExcursionInterface
   *   The called Excursion entity.
   */
  public function setName($name);

  /**
   * Gets the Excursion creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Excursion.
   */
  public function getCreatedTime();

  /**
   * Sets the Excursion creation timestamp.
   *
   * @param int $timestamp
   *   The Excursion creation timestamp.
   *
   * @return \Drupal\excursions\Entity\ExcursionInterface
   *   The called Excursion entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Excursion published status indicator.
   *
   * Unpublished Excursion are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Excursion is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Excursion.
   *
   * @param bool $published
   *   TRUE to set this Excursion to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\excursions\Entity\ExcursionInterface
   *   The called Excursion entity.
   */
  public function setPublished($published);

}
