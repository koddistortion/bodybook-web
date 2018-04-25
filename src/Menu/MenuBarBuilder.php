<?php
/*
 * This file is part of the Koddistortions BodyBook.
 *
 * (c) Oliver Kotte
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Koddistortion\BodyBook\Menu;

use Knp\Menu\ItemInterface;

class MenuBarBuilder extends AbstractMenuBuilder {

	/**
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	public function createMenuBar(): ItemInterface {
		$menu = $this->factory->createItem('menuBar');

		$this->addLayoutsColumn($menu);
		$this->addPagesColumn($menu);
		$this->addUiColumn($menu);
		$this->addComponentsColumn($menu);
		$this->addWidgetsColumn($menu);
		$this->addAppsColumn($menu);

		return $menu;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	protected function addAppsColumn(ItemInterface $menu): ItemInterface {
		$apps = $menu->addChild('Apps', array(
			'extras'          => array('translation_domain' => 'BodyBookMenu'),
			'labelAttributes' => array('icon' => 'wb-grid-4')
		));

		$apps->addChild('Contacts', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Calendar', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Notebook', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Taskboard', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		$documents = $apps->addChild('Documents', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$documents->addChild('Articles', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$documents->addChild('Categories', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$documents->addChild('Article', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		$apps->addChild('Forum', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Message', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Projects', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Mailbox', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Media', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Work', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Location', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$apps->addChild('Travel', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		return $apps;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	protected function addWidgetsColumn(ItemInterface $menu): ItemInterface {
		$widgets = $menu->addChild('Widgets', array(
			'extras'          => array('translation_domain' => 'BodyBookMenu'),
			'labelAttributes' => array('icon' => 'wb-extension')
		));

		$widgets->addChild('Statistics Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$widgets->addChild('Data Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$widgets->addChild('Blog Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$widgets->addChild('Chart Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$widgets->addChild('Social Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$widgets->addChild('Weather Widgets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		return $widgets;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	protected function addComponentsColumn(ItemInterface $menu): ItemInterface {
		$components = $menu->addChild('Components', array(
			'extras'             => array('translation_domain' => 'BodyBookMenu'),
			'attributes'         => array('has_section' => true),
			'childrenAttributes' => array('class' => 'blocks-md-3'),
			'labelAttributes'    => array('icon' => 'wb-plugin')
		));

		$forms = $components->addChild('General Elements', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$forms->addChild('Material Elements', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Advanced Elements', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Form Layouts', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Form Wizard', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Form Validation', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Form Masks', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$editors = $forms->addChild('Editors', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
		));
		$editors->addChild('Summernote', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
		));
		$editors->addChild('Markdown', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
		));
		$editors->addChild('Ace Editor', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('Image Cropping', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$forms->addChild('File Uploads', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));

		$tables = $components->addChild('Tables', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$tables->addChild('Basic Tables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('Bootstrab Tables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('floatThead', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('Responsive Tables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('Editable Tables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('jsGrid', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('FooTable', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('DataTables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('jQuery Tabledit', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$tables->addChild('Table Dragger', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));



		$chart = $components->addChild('Chart', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$chart->addChild('Chart.js', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Gauges', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Flot', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Peity', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Sparkline', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Morris', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Chartist.js', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Rickshaw', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('Pie Progress', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$chart->addChild('C3', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		return $components;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	protected function addUiColumn(ItemInterface $menu): ItemInterface {
		$ui = $menu->addChild('UI', array(
			'extras'             => array('translation_domain' => 'BodyBookMenu'),
			'attributes'         => array('has_section' => true),
			'childrenAttributes' => array('class' => 'blocks-md-3'),
			'labelAttributes'    => array('icon' => 'wb-bookmark')
		));

		$basicUi = $ui->addChild('Basic UI', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$panel = $basicUi->addChild('Panel', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$panel->addChild('Panel Structure', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$panel->addChild('Panel Actions', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$panel->addChild('Panel Portlets', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));

		$basicUi->addChild('Buttons', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Cards', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Dropdowns', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Icons', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('List', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Tooltip & Popover', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Modals', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Tabs & Accordions', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Images', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Badges', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Progress Bars', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Carousel', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Typography', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Colors', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$basicUi->addChild('Utilities', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));

		$advancedUi = $ui->addChild('Advanced UI', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$advancedUi->addChild('Tour', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Animation', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Highlight', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Lightbox', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Scrollable', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Rating', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Context Menu', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Alertify', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Masonry', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Treeview', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Toastr', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Vector Maps', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Google Maps', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Sortable & Nestable', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$advancedUi->addChild('Bootbox & Sweetalert', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));

		$structure = $ui->addChild('Structure', array(
			'extras'     => array('translation_domain' => 'BodyBookMenu'),
			'attributes' => array('section_header' => true),
		));
		$structure->addChild('Alerts', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Ribbon', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Pricing Tables', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Overlay', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Cover', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Simple Timeline', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Timeline', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Step', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Comments', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Media', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Chat', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Testimonials', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Nav', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Navbars', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Blockquotes', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Pagination', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$structure->addChild('Breadcrumbs', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));

		return $ui;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 * @throws \InvalidArgumentException
	 */
	protected function addPagesColumn(ItemInterface $menu): ItemInterface {
		$pages = $menu->addChild('Pages', array(
			'extras'          => array('translation_domain' => 'BodyBookMenu'),
			'labelAttributes' => array('icon' => 'wb-file')
		));

		$errors = $pages->addChild('Errors', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$errors->addChild('400 Bad Request', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$errors->addChild('403 Forbidden', array(
			'extras' => array('translation_doamin' => 'BodyBookMenu')
		));
		$errors->addChild('404 Not Found', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$errors->addChild('500 Internal Server Error', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$errors->addChild('503 Service Unavailable', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		$pages->addChild('FAQ', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Gallery', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Gallery Grid', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Search Result', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		$maps = $pages->addChild('Maps', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$maps->addChild('Google Maps', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$maps->addChild('Vector Maps', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		$pages->addChild('Maintenance', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Forgot Password', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Lockscreen', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Login', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));
		$pages->addChild('Register', array(
			'extras' => array('translation_domain' => 'BodyBookMenu')
		));

		return $pages;
	}

	/**
	 * @param ItemInterface $menu
	 * @return ItemInterface
	 */
	protected function addLayoutsColumn(ItemInterface $menu): ItemInterface {
		$layouts = $menu->addChild('Layouts', array(
			'extras'          => array('translation_domain' => 'BodyBookMenu'),
			'labelAttributes' => array('icon' => 'wb-layout')
		));
		$layouts->addChild('Grid Scaffolding', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Layout Grid', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Different Headers', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Panel Transition', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Boxed Layout', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Two Columns', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$layouts->addChild('Bordered Header', array(
			'route'  => 'koddistortion_bodybook_lucky_number',
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$pageAside = $layouts->addChild('Page Aside', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$pageAside->addChild('Left Static', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$pageAside->addChild('Right Static', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$pageAside->addChild('Left Fixed', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		$pageAside->addChild('Right Fixed', array(
			'extras' => array('translation_domain' => 'BodyBookMenu'),
		));
		return $layouts;
	}
}