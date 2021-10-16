<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                <!--                    <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="--><?php //echo plugins_url('emp/assets-profile/images/logo/robust-logo-light.png'); ?><!--" data-expand="--><?php //echo plugins_url('emp/assets-profile/images/logo/robust-logo-light.png'); ?><!--" data-collapse="--><?php //echo plugins_url('emp/assets-profile/images/logo/robust-logo-small.png'); ?><!--" class="brand-logo"></a></li>-->
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5">         </i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">
                    <?php
                    if ($p_not_count==0)
                    {
                        ?>
                        <li class="dropdown dropdown-notification nav-item"><a href="<?php echo home_url('se_project_emp_notification/?p_id='.$p_id);?>"   class="nav-link nav-link-label"><i class="ficon icon-bell4"></i></a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="dropdown dropdown-notification nav-item open"><a href="<?php echo home_url('se_project_emp_notification/?p_id='.$p_id);?>"  class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up"><?php echo $p_not_count;?></span></a>

                        </li>
                        <?php
                    }
                    ?>

                    <?php
                    if ($p_message_count==0)
                    {
                        ?>
                        <li class="dropdown dropdown-notification nav-item"><a href="<?php echo home_url('se_project_emp_message/?p_id='.$p_id);?>" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i></a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li class="dropdown dropdown-notification nav-item"><a href="<?php echo home_url('se_project_emp_message/?p_id='.$p_id);?>"  class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up"><?php echo $p_message_count;?></span></a></li>

                        <?php
                    }
                    ?>


                </ul>
            </div>
        </div>
    </div>
</nav>
