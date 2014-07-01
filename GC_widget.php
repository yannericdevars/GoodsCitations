<?php
require_once 'Sources.php';
require_once 'Autor.php';

/**
 * Classe du Widget
 */
class GoodsCitations extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'citations_widget', // Base ID
                __('Citations', 'text_domain'), // Name
			array( 'description' => __( 'Citations d\'hommes célèbres', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		echo __( $this->citations(), 'text_domain' );
		echo $args['after_widget'];
	}

    /**
     * Affiche une citation
     * @return string La citation avec son auteur
     */
    public function citations()
    {
        $oCitation = Sources::getOneCitation();
        return '" ' . $oCitation->getTexte() . ' "' . '<br/><div align="right"><b>' . $oCitation->getName() . '</b></div>';
    }

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form($instance)
    {
        $title = __('New title', 'text_domain');
        if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}

		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} //

// register widget
function register_citations_widget() {

    register_widget( 'GoodsCitations' );
}

add_action( 'widgets_init', 'register_citations_widget' );
