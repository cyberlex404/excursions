<?php

namespace Drupal\excursions\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Guide entities.
 *
 * @ingroup excursions
 */
interface GuideInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Guide name.
   *
   * @return string
   *   Name of the Guide.
   */
  public function getName();

  /**
   * Sets the Guide name.
   *
   * @param string $name
   *   The Guide name.
   *
   * @return \Drupal\excursions\Entity\GuideInterface
   *   The called Guide entity.
   */
  public function setName($name);

  /**
   * Gets the Guide creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Guide.
   */
  public function getCreatedTime();

  /**
   * Sets the Guide creation timestamp.
   *
   * @param int $timestamp
   *   The Guide creation timestamp.
   *
   * @return \Drupal\excursions\Entity\GuideInterface
   *   The called Guide entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Guide published status indicator.
   *
   * Unpublished Guide are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Guide is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Guide.
   *
   * @param bool $published
   *   TRUE to set this Guide to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\excursions\Entity\GuideInterface
   *   The called Guide entity.
   */
  public function setPublished($published);

}
