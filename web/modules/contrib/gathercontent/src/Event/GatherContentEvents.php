<?php

namespace Drupal\gathercontent\Event;

/**
 * Defines events for the GatherContent module.
 *
 * @see \Drupal\gathercontent\Event\NodeToUpdateEvent
 * @see \Drupal\gathercontent\Event\PreNodeSaveEvent
 * @see \Drupal\gathercontent\Event\PostNodeSaveEvent
 * @see \Drupal\gathercontent\Event\PostImportEvent
 */
final class GatherContentEvents {

  /**
   * Name of the event fired before we determine the node to update.
   *
   * This event allows modules to provide an alternative node to update based
   * on custom criteria rather than the default GatherContent node to update
   * rules. The event is triggered just before the importer attempts to create
   * a node or find an existing node to update. The event listener method
   * receives a \Drupal\gathercontent\Event\NodeToUpdateEvent instance.
   *
   * @Event
   *
   * @see \Drupal\gathercontent\Event\NodeToUpdateEvent
   *
   * @var string
   */
  const NODE_TO_UPDATE = 'gathercontent.node_to_update';

  /**
   * Name of the event fired before we save node from GatherContent.
   *
   * This event allows modules to perform an action before new node is saved
   * from GatherContent to Drupal. The event is triggered just before entity
   * save. The event listener method receives
   * a \Drupal\gathercontent\Event\PreNodeSaveEvent instance.
   *
   * @Event
   *
   * @see \Drupal\gathercontent\Event\PreNodeSaveEvent
   *
   * @var string
   */
  const PRE_NODE_SAVE = 'gathercontent.pre_node_save';

  /**
   * Name of the event fired after we save node from GatherContent.
   *
   * This event allows modules to perform an action after new node is saved
   * from GatherContent to Drupal. The event is triggered after menu item
   * creation. The event listener method receives
   * a \Drupal\gathercontent\Event\PostNodeSaveEvent instance.
   *
   * @Event
   *
   * @see \Drupal\gathercontent\Event\PostNodeSaveEvent
   *
   * @var string
   */
  const POST_NODE_SAVE = 'gathercontent.post_node_save';

  /**
   * Name of the event fired after we save node from GatherContent.
   *
   * This event allows modules to perform an action after selected nodes are
   * imported from GatherContent to Drupal. The event listener method receives
   * a \Drupal\gathercontent\Event\PostImportEvent instance.
   *
   * @Event
   *
   * @see \Drupal\gathercontent\Event\PostImportEvent
   *
   * @var string
   */
  const POST_IMPORT = 'gathercontent.post_import';

}
