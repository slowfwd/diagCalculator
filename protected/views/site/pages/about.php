<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->widget('bootstrap.widgets.TbBreadcrumb', array(
'links' => array(
'About' => '#',
),
));

?>
<div>
  <style scoped>
    ul {font-weight: normal }
    li {font-weight: bold; margin-bottom: 10px }
  </style>

<img src="../../images/chop.gif" height="100px" width = "200px " style="float:right" >
<h1>About</h1>
<p style = "font-size:18px;font-style:Verdana;" >
	This web application was created by the School of Engineering as a part of the course project for CIS573. </br>
	</br>
	Group 13.
	<ul>
		<li>Nivedita</li>
		<li>Bhumika</li>
		<li>Vaibhav</li>
		<li>Prithvi</li>

	</ul>
</p>
</div>