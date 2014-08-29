<?php
/**
 * ownCloud - maps
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Sander Brand <brantje@gmail.com>
 * @copyright Sander Brand 2014
 */

namespace OCA\Maps\Controller;

use \OCP\IRequest;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\AppFramework\ApiController;


class LocationController extends ApiController {

	private $userId;
	private $cacheManager;
	public function __construct($appName, IRequest $request, $userId) {
		parent::__construct($appName, $request);
		$this -> userId = $userId;
	}

	/**
	 * CAUTION: the @Stuff turn off security checks, for this page no admin is
	 *          required and no CSRF check. If you don't know what CSRF is, read
	 *          it up in the docs or you might create a security hole. This is
	 *          basically the only required method to add this exemption, don't
	 *          add it to any other method if you don't exactly know what it does
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 * @CORS
	 */
	public function update() {
		$params = array('user' => $this -> userId);
		print_r($params);
	}

}
