<?php

	class Exception {

		public function exectionValorInvalido($value)
		{
			if($value <= 0) {
        		throw new Exception('Valor inválido.');
			}
			return $value;
		}

	}