<?php

namespace Drupal\excursions;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Guide entity.
 *
 * @see \Drupal\excursions\Entity\Guide.
 */
class GuideAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\excursions\Entity\GuideInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished guide entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published guide entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit guide entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete guide entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add guide entities');
  }

}
