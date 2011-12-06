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

```
<?php
use DataGrid\DataGrid;
use DataGrid\Renderer\HtmlTable;

/* @var $q \Doctrine\ORM\Query */
$q = $this->getQuery();

$grid = DataGrid::factory($q);
$grid->setRenderer(new HtmlTable());
$grid->setSpecialColumn('facebookId', array(
    DataGrid::CELL => function ($row) {
        return sprintf('<img src="https://graph.facebook.com/%s/picture" >', $row['facebookId']);
    },
    DataGrid::COLUMN => array(
        'name' => 'User Avatar',
        'attribs' => array(
            'width' => '50'
        )
    )
));
$grid->render();

/*
Output

<table class="zebra-striped">
<tr>
    <th width="50">avatar</th>
</tr>
<tr>
    <td><img src="https://graph.facebook.com/123/picture"></td>
</tr>
</table>
*/
?>
```

P.S. Sory for my english.


