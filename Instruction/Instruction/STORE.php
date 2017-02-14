<?php

declare(strict_types=1);

namespace TinyComputer\Instruction;
use TinyComputer\Instruction;
use TinyComputer\Argument;
use TinyComputer\Flag;
use TinyComputer\MicroCode as M;

class STORE extends Instruction {

	public function __construct() {
		parent::__construct("STORE", 0x05, new Argument\ReadRegister);
	}

	protected function getInternalMicroCode(Flag $flag): array {
		return [
			$this->mux(M::PC_O, M::MEM_O, M::INC_W, M::RI_W),
			$this->mux(M::INCDEC_O, M::PC_W),
			$this->mux(M::J_O, M::RIO_X, M::MEM_W),
			$this->mux(M::J_O, M::RIO_X),
		];
	}

}