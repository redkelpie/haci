<?php

namespace Drupal\uc_order\Plugin\views\sort;

use Drupal\views\Plugin\views\sort\SortPluginBase;

/**
 * Sort handler that handles fields generated by table.fieldname * table.qty
 * and performs a simple sort.
 *
 * This sort handler is appropriate for any numeric formula that ends up
 * in the query with an alias like "table_field".
 *
 * @ingroup views_sort_handlers
 *
 * @ViewsSort("uc_order_total")
 */
class Total extends SortPluginBase {

  /**
   * {@inheritdoc}
   */
  function query() {
    $this->ensure_my_table();
    // Add the field.
    $this->query->add_orderby(NULL, NULL, $this->options['order'], $this->table . '_' . $this->field);
  }
}
