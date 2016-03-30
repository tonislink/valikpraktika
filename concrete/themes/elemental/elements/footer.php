<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer id="footer-theme">
    <?php if ($displayFirstSection) { ?>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-21">
                <?php
                $a = new GlobalArea('Teavitus');
                $a->display();
                ?>
            </div>
            
        </div>
    </div>
    </section>
    <?php } ?>
    
</footer>

<footer id="concrete5-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span><?php echo t('Built with <a href="http://www.concrete5.org" class="concrete5">concrete5</a> CMS.')?></span>
                <span class="pull-right">
                    <?php echo Core::make('helper/navigation')->getLogInOutLink()?>
                </span>
            </div>
        </div>
    </div>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
