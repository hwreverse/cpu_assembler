<?php

$memoryOffset = 0xC000;

$source = [
	 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x0d, 0x07, 0x02, 0x30, 0xc0, 0xda, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x1a, 0x07, 0x02, 0x30, 0xc0, 0xe3, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x27, 0x07, 0x02, 0x30, 0xc0, 0xec, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x34, 0x07, 0x02, 0x30, 0xc0, 0xf5, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x41, 0x07, 0x02, 0x30, 0xc1, 0x01, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x4e, 0x07, 0x02, 0x30, 0xc1, 0x12, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x5b, 0x07, 0x02, 0x30, 0xc1, 0x23, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x68, 0x07, 0x02, 0x30, 0xc1, 0x2f, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x75, 0x07, 0x02, 0x30, 0xc1, 0x3d, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x82, 0x07, 0x02, 0x30, 0xc1, 0x49, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x8f, 0x07, 0x02, 0x30, 0xc1, 0x57, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0x9c, 0x07, 0x02, 0x30, 0xc1, 0x65, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0xa9, 0x07, 0x02, 0x30, 0xc1, 0x73, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0xb6, 0x07, 0x02, 0x30, 0xc1, 0x8f, 0x03, 0x20, 0xc0, 0x07, 0x02, 0x03, 0x20, 0xc3, 0x07, 0x02, 0x30, 0xc0, 0xc3, 0x03, 0x00, 0x01, 0x03, 0x10, 0x01, 0x10, 0x21, 0x36, 0xc0, 0xc3, 0x01, 0x01, 0x01, 0x12, 0x30, 0xc0, 0xc9, 0x08, 0x40, 0x08, 0x30, 0x40, 0x03, 0x00, 0xff, 0x17, 0x00, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x10, 0xff, 0x17, 0x11, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x20, 0xff, 0x17, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x00, 0x15, 0x00, 0x33, 0xc0, 0xf8, 0x36, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x0f, 0x03, 0x10, 0xf0, 0x10, 0x21, 0x03, 0x00, 0xff, 0x14, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x01, 0x03, 0x10, 0x01, 0x10, 0x21, 0x03, 0x00, 0x02, 0x14, 0x12, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0xff, 0x03, 0x10, 0x00, 0x12, 0x21, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0xff, 0x03, 0x10, 0xff, 0x12, 0x21, 0x17, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x00, 0x03, 0x10, 0x00, 0x13, 0x21, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0xff, 0x03, 0x10, 0xff, 0x13, 0x21, 0x17, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x00, 0x03, 0x10, 0xff, 0x13, 0x21, 0x17, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0xff, 0x03, 0x10, 0x00, 0x13, 0x21, 0x17, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0x01, 0x03, 0x10, 0x02, 0x07, 0x01, 0x07, 0x00, 0x08, 0x20, 0x14, 0x22, 0x32, 0xc1, 0x85, 0x7f, 0x08, 0x20, 0x01, 0x01, 0x14, 0x22, 0x32, 0xc0, 0xd5, 0x7f, 0x03, 0x00, 0xff, 0x03, 0x10, 0xff, 0x03, 0x20, 0xff, 0x03, 0x30, 0xff, 0x03, 0x40, 0xff, 0x08, 0x40, 0x08, 0x30, 0x40, 0x7f,

];

if ($_SERVER['argc'] > 1) {
	$source = eval("return [" . file_get_contents($_SERVER['argv'][1]) . "];");
}

function jump(int $id, string $name): array {
	return [
		[
			$id, $name, ["ADDRESS"],
		],
		[
			$id + 0x10, "$name-I", [],
		]
	];
}

function alu(int $id, string $name): array {
	return [
		[
			$id, $name, ["RI-RW"],
		],
		[
			$id + 0x10, "$name-I", ["RI-WO", "VALUE"],
		]
	];
}

$instructions = a(
	[
		0x00, "RESET", []
	],
	[
		0x7f, "HALT", []
	],
	[
		0x01, "MOV", ["RI-RW"]
	],
	[
		0x02, "LOAD", ["RI-WO"]
	],
	[
		0x03, "LOAD-I", ["RI-WO", "VALUE"]
	],
	[
		0x05, "STORE", ["RI-RO"]
	],
	[
		0x06, "STORE-I", ["RI-RO", "ADDRESS"]
	],
	[
		0x07, "PUSH", ["RI-RO"]
	],
	[
		0x08, "POP", ["RI-WO"]
	],
	[
		0x09, "FLAG", ["RI-WO"]
	],
	[
		0x0A, "CMP", ["RI-RO"]
	],
	[
		0x0B, "CMP-I", ["VALUE"]
	],
	...alu(0x10, "ADD"),
	...alu(0x11, "SUB"),
	...alu(0x12, "AND"),
	...alu(0x13, "OR"),
	...alu(0x14, "XOR"),
	...alu(0x15, "INC"),
	...alu(0x16, "DEC"),
	...alu(0x17, "NOT"),
	...alu(0x18, "ZERO"),
	...alu(0x19, "FF"),
	...alu(0x1A, "SELF"),
	...jump(0x30, "JMP"),
	...jump(0x32, "JMPZ"),
	...jump(0x33, "JMPNZ"),
	...jump(0x34, "JMPS"),
	...jump(0x35, "JMPNS"),
	...jump(0x36, "JMPC"),
	...jump(0x37, "JMPNC"),
	
	


	...[]
);

$registers = [
	0x0 => "RA",
	0x1 => "RB",
	0x2 => "RC",
	0x3 => "RJ1",
	0x4 => "RJ2",
];

$ip = 0;

while ($ip < count($source)) {
	$originalIp = $ip;
	$instruction = $instructions[$source[$ip]] ?? null;
	if (!$instruction) {
		throw new \LogicException("Unknown instruction {$source[$ip]} at $ip");
	}
	$args = [];
	$rawArgs = [$source[$ip]];
	foreach ($instruction->options as $option) {
		switch ($option) {
			case 'RI-RO':
				$args[] = $registers[$source[++$ip] & 0x0F];
				$rawArgs[] = $source[$ip];
				break;
			case 'RI-WO':
				$args[] = $registers[($source[++$ip] & 0xF0) >> 4];
				$rawArgs[] = $source[$ip];
				break;
			case 'RI-RW':
				$args[] = $registers[($source[++$ip] & 0xF0) >> 4];
				$args[] = $registers[$source[$ip] & 0x0F];
				$rawArgs[] = $source[$ip];
				break;
			case 'VALUE':
				$args[] = "0x" . strtoupper(dechex($source[++$ip]));
				$rawArgs[] = $source[$ip];
				break;
			case 'ADDRESS':
				$args[] = "0x" . strtoupper(dechex($source[++$ip]) . dechex($source[++$ip]));
				$rawArgs[] = $source[$ip - 1];
				$rawArgs[] = $source[$ip];
				break;
						
		}
	}


	printf(
		"%016b (0x%04X) - %-20s - %s %s;\n", 
		$memoryOffset + $originalIp, 
		$memoryOffset + $originalIp, 
		implode(" ", array_map(function($v) {
			return sprintf("0x%02X", $v);
		}, $rawArgs)),
		$instruction->name,
		implode(", ", $args)
	);

	$ip++;
}

function a(array ... $a): array {
	$result = [];
	foreach ($a as $v) {
		list ($id, $name, $options) = $v;
		$result[$id] = (object) [
			"id" => $id,
			"name" => $name,
			"options" => $options,
		];
	}
	return $result;
}