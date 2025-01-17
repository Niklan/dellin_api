<?php

namespace Niklan\DellinApi\Request\Catalog;

use Niklan\DellinApi\Request\RequestBase;

/**
 * Provides request for list of available payment types.
 *
 * @see https://dev.dellin.ru/api/catalogs/request_info/
 */
class PaymentTypes extends RequestBase {

  /**
   * {@inheritdoc}
   */
  protected $endpoint = '/v1/public/payment_types';

}
