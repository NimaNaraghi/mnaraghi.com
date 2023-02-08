<?php
if(isset($artwork->theme->title)){
	$themeTitle = $artwork->theme->title;
}
else{
	$themeTitle = "";
}

if(isset($artwork->technic->title)){
	$technicTitle = $artwork->technic->title;
}
else{
	$technicTitle = "";
}

echo "<strong>" . $artwork->title  . "</strong>
<span><small>" . Yii::t('app','Width') . ": " . $artwork->width . "cm x " . Yii::t('app','height') . ": " . $artwork->height . "cm </span>
                            
                                #" . $themeTitle  . "
                                #" . $technicTitle . "
                            </small>
                        
                        <p>  
                            <span>" . $artwork->description . "</span>
                        </p>";
?>