# Introduction
DataGridBundle is simple integration with DataGrid library (https://github.com/widmogrod/DataGrid)

# Requirements

  * Zend Framework 2 (https://github.com/zendframework/zf2)

# Installation

Simplest way:

  1. cd my/project/folder
  2. git clone git@github.com:widmogrod/zf2-datagrid-bundle.git modules/DataGridBundle --recursive
  3. open my/project/folder/configs/application.config.php and add 'DataGridBundle' to your 'modules' parameter.

# How to use

```
$dql = 'SELECT q FROM Question q JOIN q.answers';
/* @var $q \Doctrine\ORM\Query */
$q = $em->createQuery($dql);
$grid = DataGrid::factory($q);
$grid->setRenderer(new HtmlTable());
echo $grid->render();
```

P.S. Sory for my english.


