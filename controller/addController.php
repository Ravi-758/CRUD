<?php

include('./view/addView.php');
class addController
{
    public function actionIndex()
    {
        return $this->render('addView');
      
    }
    
}

