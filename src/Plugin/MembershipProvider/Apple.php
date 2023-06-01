<?php

declare(strict_types=1);

namespace Drupal\membership_provider_apple\Plugin\MembershipProvider;

use Drupal\Core\Form\FormStateInterface;
use Drupal\membership\Entity\MembershipInterface;
use Drupal\membership\Plugin\MembershipProviderBase;

/**
 * Apple membership provider.
 *
 * @MembershipProvider(
 *   id = "apple",
 *   label = "iTunes Store/Apple",
 * )
 */
final class Apple extends MembershipProviderBase {

  /**
   * {@inheritDoc}
   */
  public function postCreateMembership(MembershipInterface $membership, array $pluginValues = []): void {
    // TODO: Implement postCreateMembership() method.
  }

  /**
   * {@inheritDoc}
   */
  public function getWorkflowId(): string {
    return 'membership_apple';
  }

}
