<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter PDF Library to generate PDF using TCPDF
 *
 * @author Ashiqur Rahman
 * @author_url http://ghumkumar.com
 **/

require_once(dirname(__FILE__) . '/../third_party/tcpdf/tcpdf.php');

class Pdf extends TCPDF
{
	var $ci;
	public function __construct() {
		parent::__construct();
		$this->ci =& get_instance();
	}

	/**
	 * Load a CodeIgniter view into domPDF
	 *
	 * @access	public
	 * @param	string	$view The view to load
	 * @param	array	$data The view data
	 * @return	void
	 */
	public function generate($view, $data = array())
	{
		$this->ci->load->helper('security');
		$html = $this->ci->load->view($view, $data, TRUE);
		$this->addPage();

		/*$html = strip_image_tags($html);
		$img = @file_get_contents(assets_url('uploads/' . $data['data']['news']->image));
		if($img) {
			$this->Image('@' . $img, 50, 50, 0, 250);
		}*/

		$this->writeHTML($html, true, false, true, false, '');
	}
}