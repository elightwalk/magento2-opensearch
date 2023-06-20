# Name:

Magento 2 OpenSearch

# Descriptions:

This magento OpenSearch extension is resolved the opensearch SSL verification issue.

# Installation :

Go to Magento root and then below **commands**

```
 composer require elightwalk/magento2-opensearch
 php bin/magento module:enable Elightwalk_Core Elightwalk_OpenSearch
 php bin/magento setup:upgrade
 php bin/magento setup:di:compile
 php bin/magento setup:static-content:deploy
 php bin/magento c:f
 php bin/magento c:c
 ```

# Supporting Versions

```
2.4.6
```

# Changelog

## 1.0.0

    => Support Magento version 2.4.6
    => Resolved OpenSearch SSL verification issue
