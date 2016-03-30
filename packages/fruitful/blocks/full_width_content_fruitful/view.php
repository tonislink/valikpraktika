<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $im = Loader::helper('image');
    $page = Page::getByID($btnLink);
    if($btnLink<0){
        if(is_object($page)){    
            $theLink = $nav->getLinkToCollection($page);
        }
    }
    if($bgColor){
        $style=" style='background-color: ".$bgColor."; color: $textColor;'";
    }
    if($fID){
        $file = File::getByID($fID);
        if(is_object($file)){
            $filepath = $file->getRelativePath();
        }
        $style = " style='background-image: url(".$filepath."); color: $textColor;'";
    }
?>
<div class="featured-content"<?php echo $style?>>
    
    <div class="container">
        
        <div class="row">
            
            <?php echo $content?>
            <?php  if($btnLink>0){?>
            <a class="btn btn-default btn-lg" href="<?php echo $theLink?>"><?php echo $btnText?></a>
            <?php  } ?>
            
        </div>
        
    </div>
    
</div>
