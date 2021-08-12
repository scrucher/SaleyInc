<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ListBackups][google.spanner.admin.database.v1.DatabaseAdmin.ListBackups].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.ListBackupsRequest</code>
 */
class ListBackupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance to list backups from.  Values are of the
     * form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * An expression that filters the list of returned backups.
     * A filter expression consists of a field name, a comparison operator, and a
     * value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the
     * [Backup][google.spanner.admin.database.v1.Backup] are eligible for
     * filtering:
     *   * `name`
     *   * `database`
     *   * `state`
     *   * `create_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `expire_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `version_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `size_bytes`
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic, but
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `name:Howl` - The backup's name contains the string "howl".
     *   * `database:prod`
     *          - The database's name contains the string "prod".
     *   * `state:CREATING` - The backup is pending creation.
     *   * `state:READY` - The backup is fully created and ready for use.
     *   * `(name:howl) AND (create_time < \"2018-03-28T14:50:00Z\")`
     *          - The backup name contains the string "howl" and `create_time`
     *              of the backup is before 2018-03-28T14:50:00Z.
     *   * `expire_time < \"2018-03-28T14:50:00Z\"`
     *          - The backup `expire_time` is before 2018-03-28T14:50:00Z.
     *   * `size_bytes > 10000000000` - The backup's size is greater than 10GB
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Number of backups to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupsResponse.next_page_token]
     * from a previous
     * [ListBackupsResponse][google.spanner.admin.database.v1.ListBackupsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The instance to list backups from.  Values are of the
     *           form `projects/<project>/instances/<instance>`.
     *     @type string $filter
     *           An expression that filters the list of returned backups.
     *           A filter expression consists of a field name, a comparison operator, and a
     *           value for filtering.
     *           The value must be a string, a number, or a boolean. The comparison operator
     *           must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     *           Colon `:` is the contains operator. Filter rules are not case sensitive.
     *           The following fields in the
     *           [Backup][google.spanner.admin.database.v1.Backup] are eligible for
     *           filtering:
     *             * `name`
     *             * `database`
     *             * `state`
     *             * `create_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *             * `expire_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *             * `version_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *             * `size_bytes`
     *           You can combine multiple expressions by enclosing each expression in
     *           parentheses. By default, expressions are combined with AND logic, but
     *           you can specify AND, OR, and NOT logic explicitly.
     *           Here are a few examples:
     *             * `name:Howl` - The backup's name contains the string "howl".
     *             * `database:prod`
     *                    - The database's name contains the string "prod".
     *             * `state:CREATING` - The backup is pending creation.
     *             * `state:READY` - The backup is fully created and ready for use.
     *             * `(name:howl) AND (create_time < \"2018-03-28T14:50:00Z\")`
     *                    - The backup name contains the string "howl" and `create_time`
     *                        of the backup is before 2018-03-28T14:50:00Z.
     *             * `expire_time < \"2018-03-28T14:50:00Z\"`
     *                    - The backup `expire_time` is before 2018-03-28T14:50:00Z.
     *             * `size_bytes > 10000000000` - The backup's size is greater than 10GB
     *     @type int $page_size
     *           Number of backups to be returned in the response. If 0 or
     *           less, defaults to the server's maximum allowed page size.
     *     @type string $page_token
     *           If non-empty, `page_token` should contain a
     *           [next_page_token][google.spanner.admin.database.v1.ListBackupsResponse.next_page_token]
     *           from a previous
     *           [ListBackupsResponse][google.spanner.admin.database.v1.ListBackupsResponse]
     *           to the same `parent` and with the same `filter`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance to list backups from.  Values are of the
     * form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The instance to list backups from.  Values are of the
     * form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * An expression that filters the list of returned backups.
     * A filter expression consists of a field name, a comparison operator, and a
     * value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the
     * [Backup][google.spanner.admin.database.v1.Backup] are eligible for
     * filtering:
     *   * `name`
     *   * `database`
     *   * `state`
     *   * `create_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `expire_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `version_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `size_bytes`
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic, but
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `name:Howl` - The backup's name contains the string "howl".
     *   * `database:prod`
     *          - The database's name contains the string "prod".
     *   * `state:CREATING` - The backup is pending creation.
     *   * `state:READY` - The backup is fully created and ready for use.
     *   * `(name:howl) AND (create_time < \"2018-03-28T14:50:00Z\")`
     *          - The backup name contains the string "howl" and `create_time`
     *              of the backup is before 2018-03-28T14:50:00Z.
     *   * `expire_time < \"2018-03-28T14:50:00Z\"`
     *          - The backup `expire_time` is before 2018-03-28T14:50:00Z.
     *   * `size_bytes > 10000000000` - The backup's size is greater than 10GB
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression that filters the list of returned backups.
     * A filter expression consists of a field name, a comparison operator, and a
     * value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the
     * [Backup][google.spanner.admin.database.v1.Backup] are eligible for
     * filtering:
     *   * `name`
     *   * `database`
     *   * `state`
     *   * `create_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `expire_time`  (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `version_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *   * `size_bytes`
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic, but
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `name:Howl` - The backup's name contains the string "howl".
     *   * `database:prod`
     *          - The database's name contains the string "prod".
     *   * `state:CREATING` - The backup is pending creation.
     *   * `state:READY` - The backup is fully created and ready for use.
     *   * `(name:howl) AND (create_time < \"2018-03-28T14:50:00Z\")`
     *          - The backup name contains the string "howl" and `create_time`
     *              of the backup is before 2018-03-28T14:50:00Z.
     *   * `expire_time < \"2018-03-28T14:50:00Z\"`
     *          - The backup `expire_time` is before 2018-03-28T14:50:00Z.
     *   * `size_bytes > 10000000000` - The backup's size is greater than 10GB
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Number of backups to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of backups to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupsResponse.next_page_token]
     * from a previous
     * [ListBackupsResponse][google.spanner.admin.database.v1.ListBackupsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListBackupsResponse.next_page_token]
     * from a previous
     * [ListBackupsResponse][google.spanner.admin.database.v1.ListBackupsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

