<?php
namespace Interfrog\IfWhitevita\ViewHelpers;

class VimeourlViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {


	protected $searchStrings = array('/video/');
	protected $vimeoid = '';
	protected $originUrl = '';
	protected $protocol = '';


	private function setProtocol() {
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
			$this->protocol = "https://";
		} else {
			$this->protocol = "http://";
		}
	}

	/**
	 * @param string $url to search in
	 * @return string content
	 */
    public function render($url) {

    	$this->setProtocol();
    	$this->originUrl = $url;

    	foreach ($this->searchStrings as $needle) {
    		if (strpos($url,$needle)) {
    			$this->vimeoid = explode($needle, $url)[1];
    		}
    	}

    	if (empty($this->vimeoid)) {
    		$videoidFromURL = explode('vimeo.com/', $url)[1];
    		if (is_numeric($videoidFromURL)) {
    			$returnURL = $this->protocol.'player.vimeo.com/video/'.$videoidFromURL;
    		} else {
    			$returnURL = $this->originUrl;
    		}
    	} else {
    		$returnURL = $this->protocol.'player.vimeo.com/video/'.$this->vimeoid;
    	}

        return $returnURL;
    }
}