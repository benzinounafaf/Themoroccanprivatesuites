<?php
namespace HotellerElementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Distortion Grid
 *
 * @since 1.0.0
 */
class Hoteller_Timeline extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'hoteller-timeline';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Timeline', 'hoteller-elementor' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-bullet-list';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'hoteller-theme-widgets-category' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return array();
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'hoteller-elementor' ),
			]
		);
		
		$this->add_control(
			'slides',
			[
				'label' => __( 'Slides', 'hoteller-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'slide_title' => '1997 The beginning',
						'slide_description' => 'Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral.',
					],
					[
						'slide_image' => array('url' => 'http://assets.themegoods.com/demo/hoteller/timeline/bg1.jpg'),
						'slide_title' => '1999 Opening of hotel suites',
						'slide_description' => 'Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets.',
					],
					[
						'slide_image' => array('url' => 'http://assets.themegoods.com/demo/hoteller/timeline/bg2.jpg'),
						'slide_title' => '2003 Opening of Hotel Restaurant',
						'slide_description' => 'Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy',
					],
				],
				'fields' => [
					[
						'name' => 'slide_image',
						'label' => __( 'Image', 'hoteller-elementor' ),
						'type' => Controls_Manager::MEDIA,
						'label_block' => true,
					],
					[
						'name' => 'slide_title',
						'label' => __( 'Title', 'hoteller-elementor' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Title' , 'hoteller-elementor' ),
					],
					[
						'name' => 'slide_description',
						'label' => __( 'Description', 'hoteller-elementor' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => __( 'Description' , 'hoteller-elementor' ),
					],
				],
				'title_field' => '{{{ slide_title }}}',
			]
		);
		
		$this->add_control(
			'parallax',
			[
				'label' => __( 'Parallax Effect', 'hoteller-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => __( 'Yes', 'hoteller-elementor' ),
				'label_off' => __( 'No', 'hoteller-elementor' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'image_size',
			[
				'label' => __( 'Image Size', 'hoteller-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'medium_large',
			    'options' => [
			     	'medium_large' => __( 'Medium (default 768px x 768px max)', 'hoteller-elementor' ),
			     	'large' => __( 'Large (default 1024px x 1024px max)', 'hoteller-elementor' ),
			     	'full' => __( 'Original image resolution', 'hoteller-elementor' ),
			    ],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_general_style',
			array(
				'label'      => esc_html__( 'General', 'hoteller-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'border_color',
		    [
		        'label' => __( 'Border Color', 'hoteller-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper:before' => 'background: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_control(
		    'bullet_color',
		    [
		        'label' => __( 'Bullet Background Color', 'hoteller-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper .timeline_entry .timeline_title:before' => 'background: {{VALUE}}',
		            '{{WRAPPER}} div.timeline_wrapper div.timeline_entry .timeline_title:before' => 'border-color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_title_style',
			array(
				'label'      => esc_html__( 'Title', 'hoteller-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'content_title_color',
		    [
		        'label' => __( 'Title font Color', 'hoteller-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#222222',
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper .timeline_entry .timeline_title h3' => 'color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_control(
		    'title_font_size',
		    [
		        'label' => __( 'Title Font Size (* DEPRECIATED)', 'hoteller-elementor' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 30,
		        ],
		        'range' => [
		            'px' => [
		                'min' => 20,
		                'max' => 200,
		                'step' => 1,
		            ],
		        ],
		        'size_units' => [ 'px' ],
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper .timeline_entry div.timeline_title h3' => 'font-size: {{SIZE}}{{UNIT}};',
		        ],
		    ]
		);
		
		$this->add_control(
		    'title_letter_spacing',
		    [
		        'label' => __( 'Title Letter Spacing (* DEPRECIATED)', 'hoteller-elementor' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 0,
		        ],
		        'range' => [
		            'px' => [
		                'min' => -10,
		                'max' => 10,
		                'step' => 1,
		            ],
		        ],
		        'size_units' => [ 'px' ],
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper div.timeline_entry .timeline_title h3' => 'letter-spacing: {{SIZE}}{{UNIT}};',
		        ],
		    ]
		);
		
		$this->add_control(
			'title_text_transform',
			[
				'label' => __( 'Title Text Transform (* DEPRECIATED)', 'hoteller-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
			    'options' => [
			     	'none' => __( 'None', 'hoteller-elementor' ),
			     	'uppercase' => __( 'Uppercase', 'hoteller-elementor' ),
			     	'lowercase' => __( 'Lowercase', 'hoteller-elementor' ),
			     	'capitalize' => __( 'Capitalize', 'hoteller-elementor' ),
			    ],
			    'selectors' => [
		            '{{WRAPPER}} div.timeline_wrapper .timeline_entry .timeline_title h3' => 'text-transform: {{VALUE}}',
		        ],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Title Typography', 'hoteller-elementor' ),
				'selector' => '{{WRAPPER}} div.timeline_wrapper .timeline_entry .timeline_title h3',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_content_style',
			array(
				'label'      => esc_html__( 'Content', 'hoteller-elementor' ),
				'tab'        => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			)
		);
		
		$this->add_control(
		    'content_font_color',
		    [
		        'label' => __( 'Content font Color', 'hoteller-elementor' ),
		        'type' => Controls_Manager::COLOR,
		        'default' => '#444444',
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper .timeline_entry .timeline_body' => 'color: {{VALUE}}',
		        ],
		    ]
		);
		
		$this->add_control(
		    'content_font_size',
		    [
		        'label' => __( 'Content Font Size (* DEPRECIATED)', 'hoteller-elementor' ),
		        'type' => Controls_Manager::SLIDER,
		        'default' => [
		            'size' => 15,
		        ],
		        'range' => [
		            'px' => [
		                'min' => 10,
		                'max' => 50,
		                'step' => 1,
		            ],
		        ],
		        'size_units' => [ 'px' ],
		        'selectors' => [
		            '{{WRAPPER}} .timeline_wrapper .timeline_entry div.timeline_body' => 'font-size: {{SIZE}}{{UNIT}};',
		        ],
		    ]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Content Typography', 'hoteller-elementor' ),
				'selector' => '{{WRAPPER}} .timeline_wrapper .timeline_entry div.timeline_body',
			]
		);
		
		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		include(HOTELLER_ELEMENTOR_PATH.'templates/timeline/index.php');
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		return '';
	}
}
