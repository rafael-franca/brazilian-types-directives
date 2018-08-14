<?php

use RafaelFranca\BrazilianTypesDirectives\BrazilianTypesRepository;

return [

	/*
    |---------------------------------------------------------------------
    | @cpf
    |---------------------------------------------------------------------
    */

	'cpf' => function ($expression) {
		$expression = BrazilianTypesRepository::stripSpaces($expression);

		return "<?php if ($expression) { echo substr($expression, 0, 3) . '.' . substr($expression, 3, 3) . '.' .substr($expression, 6, 3) . '-' . substr($expression, 9, 2); } ?>";
	},

	/*
    |---------------------------------------------------------------------
    | @cnpj
    |---------------------------------------------------------------------
    */

	'cnpj' => function ($expression) {
		$expression = BrazilianTypesRepository::stripSpaces($expression);

		return "<?php if ($expression) { echo substr($expression, 0, 2) . '.' . substr($expression, 2, 3) . '.' . substr($expression, 5, 3) . '/' . substr($expression, 8, 4) . '-' . substr($expression, 12, 2); } ?>";
	},

	/*
    |---------------------------------------------------------------------
    | @telefone
    |---------------------------------------------------------------------
    */

	'telefone' => function ($expression) {
		$expression = BrazilianTypesRepository::stripSpaces($expression);

		if (strlen($expression) === 10) {
			// Telefone Fixo / Celular (8 dígitos)
			return "<?php if ($expression) { echo '(' . substr($expression, 0, 2) . ') ' . substr($expression, 2, 4) . '-' . substr($expression, 6); } ?>";
		} else if (strlen($expression) === 11) {
			// Telefone Celular com 9º Dígito
			return "<?php if ($expression) { echo '(' . substr($expression, 0, 2) . ') ' . substr($expression, 2, 1) . '-' . substr($expression, 3, 4) . '-' . substr($expression, 7); } ?>";
		} else if (strlen($expression) > 11) {
			// Telefone com Ramal
			return "<?php if ($expression) { echo '(' . substr($expression, 0, 2) . ') ' . substr($expression, 2, 1 . '-' . substr($expression, 3, 4) . '-' . substr($expression, 7, 4) . '-' . substr($expression, 11); } ?>";
		} else {
			return "<?php if ($expression) { echo $expression; } ?>";
		}
	},

	/*
    |---------------------------------------------------------------------
    | @dinheiro
    |---------------------------------------------------------------------
    */

	'dinheiro' => function ($expression) {
		$expression = BrazilianTypesRepository::stripSpaces($expression);

		return "<?php echo 'R$ ' . if ($expression) { number_format($expression, 2, ',', '.'); } ?>";
	},

	/*
    |---------------------------------------------------------------------
    | @cep
    |---------------------------------------------------------------------
    */

	'cep' => function ($expression) {
		$expression = BrazilianTypesRepository::stripSpaces($expression);

		return "<?php if ($expression) { echo substr($expression, 0, 2) . '.' . substr($expression, 2, 3) . '-' . substr($expression, 5, 3); } ?>";
	}

];