<?php

namespace Drupal\bibcite_entity\Plugin\views\argument;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Argument handler to accept a keyword id.
 *
 * @ViewsArgument("bibcite_keyword")
 */
class BibciteKeyword extends IdArgumentBase {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity.manager')->getStorage('bibcite_keyword')
    );
  }

}
