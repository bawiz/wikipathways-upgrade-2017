<?php
/*
 * Copyright (C) 2017  J. David Gladstone Institutes
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace WikiPathways;

use Exception;

class IndexNotFoundException extends Exception {
	public function __construct( Exception $e = null ) {
		if ( $e ) {
			parent::__construct( $e->getMessage() );
		} else {
			parent::__construct( 'Unable to locate lucene index service. Please specify the base url for the index service as $indexServiceUrl in pass.php' );
		}
	}
}
