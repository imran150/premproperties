<?php
namespace ElementorHelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Hello_World extends Widget_Base {

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
		return 'hello-world';
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
		return __( 'Text Carousel', 'properties' );
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
		return 'fas fa-quote-right';
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
		return [ 'general' ];
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
		return [ 'slick-min','slick-main','elementor-hello-world' ];
	}
	public function get_style_depends() {
		return [ 'core_css','slick_core_css','slick_theme_core_css'];
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
			'content_section',
			[
				'label' => __( 'Content', 'Properties-rig-testimonial' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater ->add_control(
			'author_name',
			[
				'label' => __( 'Author Name', 'properties' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'John', 'properties' ),
				'placeholder' => __( 'Type your title here', 'plugin-domain' ),
			]
		);
		$repeater->add_control(
					'author_name_color',
					[
						'label' => __( 'Color', 'properties' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .clients-name' => 'color: {{VALUE}}',
						],
					]
				);
		$repeater ->add_control(
			'author_des',
			[
				'label' => __( 'Author Description', 'properties' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Client', 'properties' ),
				'placeholder' => __( 'Type your title here', 'properties' ),
			]
		);
		$repeater->add_control(
					'author_des_color',
					[
						'label' => __( 'Color', 'properties' ),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .clients-des' => 'color: {{VALUE}}',
						],
					]
				);

		// $this->end_controls_section();
		// $this->start_controls_section(
		// 	'content_section',
		// 	[
		// 		'label' => __( 'Content', 'Properties-rig-testimonial' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]
		// );

		$repeater ->add_control(
			'item_description',
			[
				'label' => __( 'Description', 'properties' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Description', 'plugin-domain' ),
				'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'plugin-domain' ),
			]
		);
		$this->add_control(
			'list',
			[
				'label' => __( 'Repeater List', 'properties' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => __( 'Title #1', 'properties' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
					[
						'list_title' => __( 'Title #2', 'properties' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Content', 'Properties-rig-testimonial' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		// Author Descriptions category
		$this->add_control(
			'font_family',
			[
				'label' => __( 'Author Name Font Family', 'properties' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .clients-name' => 'font-family: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'text_align',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'plugin-domain' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		// Descriptions category clients-des
		$this->add_control(
			'author-des_font_family',
			[
				'label' => __( 'Author Des Font Family', 'properties' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .clients-des' => 'font-family: {{VALUE}}',
				],
			]
		);
		// Descriptions Font family
		$this->add_control(
			'main_descriptions_font_family',
			[
				'label' => __( 'Desc Font Family', 'properties' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .main_descriptions1' => 'font-family: {{VALUE}}',
				],
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
		$settings = $this->get_settings_for_display();
		

		if($settings['list']){
			foreach($settings['list'] as $lists){
		
				?>
			
				<div class="wrap">  
    <div class="slider">
      
      <div class="rigs-item">
        <div class="rigs-wrapper">
          <div class="wrapper-text" style='text-align: <?php echo $lists['text_align'];  ?>;'>
            <img src="<?php echo plugins_url( 'assets/img/inverted-commas.png' ,__FILE__); ?>" alt="">
             <p class="main_descriptions1">
               <?php echo $lists['item_description']; ?>
             </p>


             <h3 class="clients-name" >
              <?php echo $lists['author_name']; ?>
             </h3>
             <span class="clients-des">
               <?php echo $lists['author_des']; ?>
             </span>
          
      </div>
      </div>

      
      
    </div>
    <?php
			}
		}



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
		
	}
}