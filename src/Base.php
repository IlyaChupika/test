<?php

namespace test/src
use Fields;

Class Base {
	
	public function start() {
		$data = new Fields;
		$data->test();
	}
}

$data = new Base;
$data->start();
