<?php

/**
 * Elightwalk
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Elightwalk.com license that is
 * available through the world-wide-web at this URL:
 * https://store.elightwalk.com/licence
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Elightwalk
 * @package     Elightwalk_OpenSearch
 * @copyright   Copyright (c) Elightwalk (https://www.elightwalk.com/)
 * @license     https://store.elightwalk.com/licence
 */

declare(strict_types=1);

namespace Elightwalk\OpenSearch\Plugin\Elasticsearch\Model;

use Magento\Elasticsearch\Model\Config as ElasticsearchConfig;

class Config
{
    /**
     * @inheritdoc
     */
    public function afterPrepareClientOptions(ElasticsearchConfig $subject, $result, $options)
    {
        $engine = $subject->getSearchConfigData('engine');
        if ($engine == 'opensearch') {

            $sslVerification = $subject->getSearchConfigData('opensearch_ssl_verification');
            $result['SSLVerification'] = true;
            if ($sslVerification == 0) {
                $result['SSLVerification'] = false;
            }
        }
        return $result;
    }
}
