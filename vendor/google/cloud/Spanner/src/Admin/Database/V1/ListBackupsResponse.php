<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.ListBackupsResponse</code>
 */
class ListBackupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching backups. Backups returned are ordered by `create_time`
     * in descending order, starting from the most recent `create_time`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.Backup backups = 1;</code>
     */
    private $backups;
    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups]
     * call to fetch more of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\Backup[]|\Google\Protobuf\Internal\RepeatedField $backups
     *           The list of matching backups. Backups returned are ordered by `create_time`
     *           in descending order, starting from the most recent `create_time`.
     *     @type string $next_page_token
     *           `next_page_token` can be sent in a subsequent
     *           [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups]
     *           call to fetch more of the matching backups.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching backups. Backups returned are ordered by `create_time`
     * in descending order, starting from the most recent `create_time`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.Backup backups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackups()
    {
        return $this->backups;
    }

    /**
     * The list of matching backups. Backups returned are ordered by `create_time`
     * in descending order, starting from the most recent `create_time`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.Backup backups = 1;</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\Backup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Database\V1\Backup::class);
        $this->backups = $arr;

        return $this;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups]
     * call to fetch more of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * `next_page_token` can be sent in a subsequent
     * [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups]
     * call to fetch more of the matching backups.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

