<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="container">
    <div class="row ">
    
<div class="span12">
<div class="block-404">  
      <img class="img-404" src="img/slide-1.jpg" alt="">       
        <div class="box-404">
            <h2>Sorry!</h2>
<h3><?= Html::encode($this->title) ?></h3>         
           
            <p><?= nl2br(Html::encode($message)) ?></p>
           
            <!-- <form id="form-search" action="search.php" method="GET" accept-charset="utf-8" >
                <div class="clearfix">
                    <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
                    <a href="#" onClick="document.getElementById('form-search').submit()" class="btn btn-1 ">Search</a>
                </div>
            </form> -->
        </div>
     </div>
   </div>
  </div>
</div>  
