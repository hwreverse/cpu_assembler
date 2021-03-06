<?php

declare(strict_types=1);

namespace TinyComputer\Instruction;
use TinyComputer\Instruction;
use TinyComputer\Argument;
use TinyComputer\Flag;
use TinyComputer\MicroCode as M;

class HALT extends Instruction {

	public function __construct() {
		parent::__construct("HALT", 0x7F);
	}

	protected function getInternalMicroCode(Flag $flag): array {
		return [
			$this->mux(M::HALT),
		];
	}

}