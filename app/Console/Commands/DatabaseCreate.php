<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DatabaseCreate extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:create {name?}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new MySQL database based on the database config file or the provided name';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    $schemaName = $this->argument('name') ?: config('database.connections.mysql.database');
    $charset = config('database.connections.mysql.charset', 'utf8mb4');
    $collaction = config('database.connections.mysql.collation', 'utf8mb4_unicode_ci');

    $this->info("New Database: {$this->argument('name')}");

    if ($this->confirm("Is the information correct?")) {
      config([
        'database.connections.mysql.database' => null,
      ]);

      $query = "CREATE DATABASE IF NOT EXISTS {$schemaName} CHARACTER SET {$charset} COLLATE {$collaction};";

      DB::statement($query);

      config([
        'database.connections.mysql.database' => $schemaName,
      ]);
    }

    return 0;
  }
}
