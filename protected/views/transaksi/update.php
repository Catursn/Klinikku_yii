<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->no=>array('view','id'=>$model->no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'Create Transaksi', 'url'=>array('create')),
	array('label'=>'View Transaksi', 'url'=>array('view', 'id'=>$model->no)),
	array('label'=>'Manage Transaksi', 'url'=>array('admin')),
);
?>

<h1>Update Transaksi <?php echo $model->no; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>