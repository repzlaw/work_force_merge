<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandStarting;
use Illuminate\Support\Facades\DB;

class BeforeMigrateFreshListener {

    protected const DB_CONNECTION_TO_USE = 'employers';

    /**
     * Handle the event.
     */
    public function handle ( CommandStarting $event ) : void
    {
        // Let's NOT run this on production environment.
        if ( app()->isProduction() ) {
            return;
        }

        // Let's make sure to run this only on our artisan command.
        if ( 'migrate:fresh' !== $event->command ) {
            return;
        }

        $tables = DB::connection( static::DB_CONNECTION_TO_USE )
                    ->select(
                        'SELECT table_name FROM information_schema.tables WHERE table_schema = :dbname;',
                        [ 'dbname' => config( 'database.connections.db-b.database' ) ]
                    );

        if ( empty( $tables ) ) {
            return;
        }

        foreach ( $tables as $table ) {
            DB::connection( static::DB_CONNECTION_TO_USE )
              ->statement(
                  "DROP TABLE IF EXISTS `{$table->table_name}`;"
              );
        }
    }

}