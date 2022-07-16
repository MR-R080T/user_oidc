<?php

declare(strict_types=1);

namespace OCA\UserOIDC\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\IOutput;
use OCP\Migration\SimpleMigrationStep;

class Version00008Date202207162253 extends SimpleMigrationStep {
	public function changeSchema(IOutput $output, Closure $schemaClosure, array $options) {
		/** @var ISchemaWrapper $schema */
		$schema = $schemaClosure();

		$table = $schema->getTable('user_oidc_id4me');
                $table->updateColumn('client_secret', 'string', [
                        'notnull' => true,
                        'length' => 128,
                ]);


		return $schema;
	}
}
