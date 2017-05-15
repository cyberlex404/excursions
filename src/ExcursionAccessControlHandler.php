<?php

namespace Drupal\excursions;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Excursion entity.
 *
 * @see \Drupal\excursions\Entity\Excursion.
 */
class ExcursionAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\excursions\Entity\ExcursionInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished excursion entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published excursion entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit excursion entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete excursion entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add excursion entities');
  }

}
