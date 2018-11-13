<div class="trusted">
            <div class="container">
                <div class="row">
                    <h2>НАМ ДОВЕРЯЮТ</h2>
                    <div class="block-title-separator">
                        <div class="left-line"></div>
                        <div class="trapeze"></div>
                        <div class="right-line"></div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="trusted-text">
                            <? the_field('trusted_text', 6); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="trusted-logos">
                            <? $logos = get_field('trusted_logos', 6); 
                            foreach($logos as $logo) { ?>
                                <div class="trusted-logo col-md-2 col-sm-4 col-xs-6"><img src="<?=$logo['url']; ?>" alt=""></div>
                            <? } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>