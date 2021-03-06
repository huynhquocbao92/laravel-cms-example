<?php

/*
 * This file is part of OAuth 2.0 Laravel.
 *
 * (c) Luca Degasperi <packages@lucadegasperi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Czim\CmsCore\Support\Database\CmsMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * This is the create oauth grants table migration class.
 *
 * @author Luca Degasperi <packages@lucadegasperi.com>
 */
class CreateOauthGrantsTable extends CmsMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefixCmsTable('oauth_grants'), function (Blueprint $table) {
            $table->string('id', 40)->primary();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->prefixCmsTable('oauth_grants'));
    }
}
