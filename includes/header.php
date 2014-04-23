        <?php $url = 'http://localhost/portfolio'; 

            function getUrl() {
                $the_url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
                $the_url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
                $the_url .= $_SERVER["REQUEST_URI"];
                return $the_url;
            }
        ?>
        <div hidden id="page-url"><?= getUrl(); ?></div>

        <div>

            <h1> 
                <a href="<?php echo $url; ?>" class="name">Lisa Otto<div class="portrait"><img src="<?php echo $url; ?>/img/portrait.svg" alt="Lisa Otto as an Illustration"><div class="arrow-portrait"></div></div></a><span class="bio"> is a user experience and interface designer who, sometimes, dabbles in illustration.</span>
            </h1>

            <div class="icons">
                <div>
                    <a href="mailto:otto.elizabeth@gmail.com" class="icon-envelope"><p>otto.elizabeth@gmail.com</p></a>
                </div>
                <div>
                    <a href="http://dribbble.com/Lisaotto" class="icon-dribbble"><p>@lisaotto</p></a>
                </div>
                <div>
                    <a href="" class="icon-pin"><p>Washington&nbsp;DC</p></a>
                </div>
            </div>
        </div>

        <p class="tab" data-toggle="body" data-toggle-class="teasers-open"><span class="work-title">WORK</span><span class="bio-title">BIO</span><span class="icon-arrow"></span></p>