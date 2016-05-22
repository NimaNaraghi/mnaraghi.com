<?php
echo "<strong>" . $artwork->title  . "</strong>
<span><small>" . Yii::t('app','Width') . ": " . $artwork->width . "cm x " . Yii::t('app','height') . ": " . $artwork->height . "cm </span>
                            
                                #" . $artwork->theme->title . "
                                #" . $artwork->style->title . "
                                #" . $artwork->technic->title . "
                            </small>
                        
                        <p>  
                            <span>" . $artwork->description . "</span>
                        </p>";
?>