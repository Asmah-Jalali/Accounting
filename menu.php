<div class="icon-menu">
	<div class="menu">
                <ul>
                   <?php 
					   wp_list_pages(array(
							'title_li' => ''
						))
	//					wp_nav_menu(array(
	//						'theme_location'  => 'mainmenu',
	//						'menu'            => '', 
	//						'container'       => 'div', 
	//						'container_class' => 'menu-{menu slug}-container', 
	//						'container_id'    => '',
	//						'menu_class'      => 'nav', 
	//						'menu_id'         => '',
	//						'echo'            => true,
	//						'fallback_cb'     => 'wp_page_menu',
	//						'before'          => '',
	//						'after'           => '',
	//						'link_before'     => '',
	//						'link_after'      => '',
	//						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	//						'depth'           => 2,
	//						'walker'          => ''
	//					));

				  ?>
				</ul>
                <?php
    				dynamic_sidebar("Sidebar");
    			?>

                </ul>
            </div>
        </div>
    <div class="divider">
    </div>
