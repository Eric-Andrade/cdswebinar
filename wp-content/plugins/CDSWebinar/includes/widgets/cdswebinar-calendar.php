<?php

class R_Cdswebinar_Calendar_Widget extends WP_Widget {
   /**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// $widget_ops = array( 
		// 	'classname' => 'my_widget',
		// 	'description' => 'My Widget is awesome',
		// );
		parent::__construct( 'r_cdswebinar_calendar_widget', 'Next Webinars',array(
            'description'           => 'Display all availables webinars'
        ));
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        // outputs the content of the widget
        // echo 'Next webinar';
        extract( $args );
        extract( $instance );

        $title         	 	=   apply_filters( 'widget_title', $title );
        echo $before_widget;
        echo $before_title . $title . $after_title;
		$cdswebinar_id		=   get_transient( 'r_daily_cdswebinar' );
		if($cdswebinar_id) {
			echo '<ul>';
				foreach($cdswebinar_id as $item) {
					$cdswebinar_title	=	get_the_title($item->ID);
					$cdswebinar_link	=	get_the_permalink($item->ID);
					?>
				<li>
					<a href="<?php echo $cdswebinar_link; ?>" class="url"><?php echo $cdswebinar_title; ?></a>
				</li>
					<?php
				}
			echo '</ul>';
		} else {
			echo '<p><strong>Sin webinars por el momento</strong></p>';
		}
        echo $after_widget;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // outputs the options form on admin
        $default            = array( 'title' => 'Next 5 webinars');
        $instance           = wp_parse_args( (array) $instance, $default );

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name( 'title' ); ?>"
                value="<?php echo esc_attr( $instance['title'] ); ?>">
        </p>
        <?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance                       = array();     
        $instance[ 'title' ]            = strip_tags( $new_instance[ 'title' ] );
        return $instance;
	}

}