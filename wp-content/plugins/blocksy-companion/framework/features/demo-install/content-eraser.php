<?php

namespace Blocksy;

class DemoInstallContentEraser {
	protected $is_ajax_request = true;

	public function __construct($args = []) {
		$args = wp_parse_args($args, [
			'is_ajax_request' => true,
		]);

		$this->is_ajax_request = $args['is_ajax_request'];
	}

	public function import() {
		if (
			! current_user_can('edit_theme_options')
			&&
			$this->is_ajax_request
		) {
			wp_send_json_error([
				'message' => __("Sorry, you don't have permission to erase content.", 'blocksy-companion')
			]);
		}

		$this->reset_widgets_data();
		$this->reset_customizer();
		$this->erase_default_pages();
		$this->reset_previous_posts();
		$this->reset_previous_terms();
		$this->reset_menus();
		$this->erase_fluent_booking_data();

		if ($this->is_ajax_request) {
			wp_send_json_success();
		}
	}

	private function reset_previous_posts() {
		global $wpdb;

		$post_ids = $wpdb->get_col(
			"SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key='blocksy_demos_imported_post'"
		);

		$_GET['force_delete_kit'] = '1';

		foreach ($post_ids as $post_id) {
			ob_start();
			wp_delete_post($post_id, true);
			ob_get_clean();
		}
	}

	private function reset_previous_terms() {
		global $wpdb;

		$term_ids = $wpdb->get_col(
			"SELECT term_id FROM {$wpdb->termmeta} WHERE meta_key='blocksy_demos_imported_term'"
		);

		foreach ($term_ids as $term_id) {
			if (! $term_id) {
				continue;
			}

			$term = get_term($term_id);

			if (! $term) continue;
			if (is_wp_error($term)) continue;

			wp_delete_term($term_id, $term->taxonomy);
		}
	}

	private function erase_default_pages() {
		$sample_page = get_page_by_path('sample-page', OBJECT, 'page');
		$hello_world_post = get_page_by_path('hello-world', OBJECT, 'post');

		if ($sample_page) {
			wp_delete_post($sample_page->ID, true);
		}

		if ($hello_world_post) {
			wp_delete_post($hello_world_post->ID, true);
		}
	}

	private function reset_customizer() {
		global $wp_customize;

		if (! $wp_customize) {
			return;
		}

		$settings = $wp_customize->settings();

		foreach ($settings as $single_setting) {
			if ('theme_mod' !== $single_setting->type) {
				continue;
			}

			remove_theme_mod($single_setting->id);
		}
	}

	private function reset_widgets_data() {
		$sidebars_widgets = get_option('sidebars_widgets', array());

		if (! isset($sidebars_widgets['wp_inactive_widgets'])) {
			$sidebars_widgets['wp_inactive_widgets'] = [];
		}

		foreach ($sidebars_widgets as $sidebar_id => $widgets) {
			if (! $widgets) continue;
			if ($sidebar_id === 'wp_inactive_widgets') {
				continue;
			}

			if ($sidebar_id === 'array_version') {
				continue;
			}

			foreach ($widgets as $widget_id) {
				$sidebars_widgets['wp_inactive_widgets'][] = $widget_id;
			}

			$sidebars_widgets[$sidebar_id] = [];
		}

		update_option('sidebars_widgets', $sidebars_widgets);
		unset($sidebars_widgets['array_version']);
		set_theme_mod('sidebars_widgets', [
			'time' => time(),
			'data' => $sidebars_widgets
		]);
	}

	private function reset_menus() {
		return;

		$menus = get_terms('nav_menu', ['hide_empty' => false]);

		foreach ($menus as $single_menu) {
			if (! isset($single_menu->term_id)) {
				continue;
			}

			wp_delete_nav_menu($single_menu->term_id);
		}
	}

	private function erase_fluent_booking_data() {
		if (! class_exists('\FluentBooking\App\Models\Calendar')) {
			return;
		}

		$current_demo = get_option('blocksy_ext_demos_current_demo', []);

		if (! isset($current_demo['fluent_booking_calendar'])) {
			return;
		}

		$calendar = \FluentBooking\App\Models\Calendar::find(
			$current_demo['fluent_booking_calendar']
		);

		if (! $calendar) {
			return;
		}

		$calendar->delete();
	}
}

