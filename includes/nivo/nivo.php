<?php
/**
 * This will eventually serve as a stating point for adding Nivo slider 
 * to framework's sliders in the future. However, currently Nivo slider 
 * is not repsonive, so it will not fit well into the different dynamic 
 * elements of the theme. When Nivo does their big update to make their 
 * plugin responsive, we will come back to this file.
 */
if( ! function_exists( 'themeblvd_nivo_recognized_slider' ) ) {
	function themeblvd_nivo_recognized_slider( $sliders ) {
		// Slide types
		$nivo_types = array(
			'image' => array(
				'name' => __( 'Image Slide', TB_GETTEXT_DOMAIN ),
				'main_title' => __( 'Setup Image', TB_GETTEXT_DOMAIN )
			)
		);
		// Options
		$nivo_options = array(
			array(
				'id'		=> 'effect',
				'name'		=> __( 'Effect', TB_GETTEXT_DOMAIN ),
				'desc'		=> __( 'Select the effect you\'d like used when transitioning between slides.', TB_GETTEXT_DOMAIN ),
				'std'		=> 'random',
				'type'		=> 'select',
				'options'	=> array(
		            'random' 				=> 'random',
					'sliceDown' 			=> 'sliceDown',
					'sliceDownLeft' 		=> 'sliceDownLeft',
					'sliceUp' 				=> 'sliceUp',
					'sliceUpLeft' 			=> 'sliceUpLeft',
					'sliceUpDown' 			=> 'sliceUpDown',
					'sliceUpDownLeft' 		=> 'sliceUpDownLeft',
					'fold' 					=> 'fold',
					'fade' 					=> 'fade',
					'slideInRight' 			=> 'slideInRight',
					'slideInLeft' 			=> 'slideInLeft',
					'boxRandom' 			=> 'boxRandom',
					'boxRain' 				=> 'boxRain',
					'boxRainReverse' 		=> 'boxRainReverse',
					'boxRainGrow' 			=> 'boxRainGrow',
					'boxRainGrowReverse' 	=> 'boxRainGrowReverse'
				)
			),
			array(
				'id'		=> 'direction_nav',
				'name'		=> __( 'Directional Navigation', TB_GETTEXT_DOMAIN ),
				'desc'		=> __( 'Select if you\'d like the direction navigation (i.e. Next/Prev arrows) to display or not.', TB_GETTEXT_DOMAIN ),
				'std'		=> 'true',
				'type'		=> 'select',
				'options'	=> array(
		            'true' 		=> 'Show',
					'false' 	=> 'Hide'
				)
			),
			array(
				'id'		=> 'control_nav',
				'name'		=> __( 'Control Navigation', TB_GETTEXT_DOMAIN ),
				'desc'		=> __( 'Select if you\'d like the control navigation to display or not.', TB_GETTEXT_DOMAIN ),
				'std'		=> 'true',
				'type'		=> 'select',
				'options'	=> array(
		            'true' 		=> 'Show',
					'false' 	=> 'Hide'
				)
			),
			array(
				'id'		=> 'slices',
				'name'		=> __( 'Slices', TB_GETTEXT_DOMAIN ),
				'desc' 		=> __( 'Enter in the number of slices to be used when using a slide transition effect.', TB_GETTEXT_DOMAIN ),
				'std'		=> '15',
				'type'		=> 'text'
			),
			array(
				'id'		=> 'box_cols',
				'name'		=> __( 'Box Columns', TB_GETTEXT_DOMAIN ),
				'desc' 		=> __( 'Enter in the number of box columns to be used when using a box transition effect.', TB_GETTEXT_DOMAIN ),
				'std'		=> '8',
				'type'		=> 'text'
			),
			array(
				'id'		=> 'box_rows',
				'name'		=> __( 'Box Rows', TB_GETTEXT_DOMAIN ),
				'desc' 		=> __( 'Enter in the number of box rows to be used when using a box transition effect.', TB_GETTEXT_DOMAIN ),
				'std'		=> '4',
				'type'		=> 'text'
			),
			array(
				'id'		=> 'pause_time',
				'name'		=> __( 'Pause Time', TB_GETTEXT_DOMAIN ),
				'desc' 		=> __( 'Enter in the number of milliseconds (1,000 milliseconds = 1 second) in between each slide transition. So for example, by default it\'s set to 3000, which means the slider will change slides every 3 seconds.', TB_GETTEXT_DOMAIN ),
				'std'		=> '3000',
				'type'		=> 'text'
			),
			array(
				'id'		=> 'anim_speed',
				'name'		=> __( 'Animation Speed', TB_GETTEXT_DOMAIN ),
				'desc' 		=> __( 'Enter in the number of milliseconds (1,000 milliseconds = 1 second) in which you\'d like each transition to take place for. So for example, by default it\'s set to 500, which means each animation will take a half second to complete.', TB_GETTEXT_DOMAIN ),
				'std'		=> '500',
				'type'		=> 'text'
			)
		);
		
		// Put it all together
		$sliders['nivo'] = array(
			'name' 		=> 'Nivo',
			'id'		=> 'nivo',
			'types'		=> $nivo_types,
			'positions'	=> array('full' => 'Full-Size'),
			'elements'	=> array('image_link', 'description'),
			'options'	=> $nivo_options
		);
		return $sliders;
	}
}
// add_filter( 'slider_blvd_recognized_sliders', 'themeblvd_nivo_recognized_slider' );