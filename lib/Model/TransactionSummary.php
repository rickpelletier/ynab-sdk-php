<?php
/**
 * TransactionSummary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  RickPelletier\YnabSDKPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RickPelletier\YnabSDKPHP\Model;

use \ArrayAccess;
use \RickPelletier\YnabSDKPHP\ObjectSerializer;

/**
 * TransactionSummary Class Doc Comment
 *
 * @category Class
 * @package  RickPelletier\YnabSDKPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'amount' => 'int',
        'memo' => 'string',
        'cleared' => 'string',
        'approved' => 'bool',
        'flag_color' => 'string',
        'account_id' => 'string',
        'payee_id' => 'string',
        'category_id' => 'string',
        'transfer_account_id' => 'string',
        'transfer_transaction_id' => 'string',
        'matched_transaction_id' => 'string',
        'import_id' => 'string',
        'deleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'date' => 'date',
        'amount' => 'int64',
        'memo' => null,
        'cleared' => null,
        'approved' => null,
        'flag_color' => null,
        'account_id' => 'uuid',
        'payee_id' => 'uuid',
        'category_id' => 'uuid',
        'transfer_account_id' => 'uuid',
        'transfer_transaction_id' => null,
        'matched_transaction_id' => null,
        'import_id' => null,
        'deleted' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'date' => 'date',
        'amount' => 'amount',
        'memo' => 'memo',
        'cleared' => 'cleared',
        'approved' => 'approved',
        'flag_color' => 'flag_color',
        'account_id' => 'account_id',
        'payee_id' => 'payee_id',
        'category_id' => 'category_id',
        'transfer_account_id' => 'transfer_account_id',
        'transfer_transaction_id' => 'transfer_transaction_id',
        'matched_transaction_id' => 'matched_transaction_id',
        'import_id' => 'import_id',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'cleared' => 'setCleared',
        'approved' => 'setApproved',
        'flag_color' => 'setFlagColor',
        'account_id' => 'setAccountId',
        'payee_id' => 'setPayeeId',
        'category_id' => 'setCategoryId',
        'transfer_account_id' => 'setTransferAccountId',
        'transfer_transaction_id' => 'setTransferTransactionId',
        'matched_transaction_id' => 'setMatchedTransactionId',
        'import_id' => 'setImportId',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'cleared' => 'getCleared',
        'approved' => 'getApproved',
        'flag_color' => 'getFlagColor',
        'account_id' => 'getAccountId',
        'payee_id' => 'getPayeeId',
        'category_id' => 'getCategoryId',
        'transfer_account_id' => 'getTransferAccountId',
        'transfer_transaction_id' => 'getTransferTransactionId',
        'matched_transaction_id' => 'getMatchedTransactionId',
        'import_id' => 'getImportId',
        'deleted' => 'getDeleted'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CLEARED_CLEARED = 'cleared';
    const CLEARED_UNCLEARED = 'uncleared';
    const CLEARED_RECONCILED = 'reconciled';
    const FLAG_COLOR_RED = 'red';
    const FLAG_COLOR_ORANGE = 'orange';
    const FLAG_COLOR_YELLOW = 'yellow';
    const FLAG_COLOR_GREEN = 'green';
    const FLAG_COLOR_BLUE = 'blue';
    const FLAG_COLOR_PURPLE = 'purple';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClearedAllowableValues()
    {
        return [
            self::CLEARED_CLEARED,
            self::CLEARED_UNCLEARED,
            self::CLEARED_RECONCILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagColorAllowableValues()
    {
        return [
            self::FLAG_COLOR_RED,
            self::FLAG_COLOR_ORANGE,
            self::FLAG_COLOR_YELLOW,
            self::FLAG_COLOR_GREEN,
            self::FLAG_COLOR_BLUE,
            self::FLAG_COLOR_PURPLE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['cleared'] = $data['cleared'] ?? null;
        $this->container['approved'] = $data['approved'] ?? null;
        $this->container['flag_color'] = $data['flag_color'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['payee_id'] = $data['payee_id'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['transfer_account_id'] = $data['transfer_account_id'] ?? null;
        $this->container['transfer_transaction_id'] = $data['transfer_transaction_id'] ?? null;
        $this->container['matched_transaction_id'] = $data['matched_transaction_id'] ?? null;
        $this->container['import_id'] = $data['import_id'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['cleared'] === null) {
            $invalidProperties[] = "'cleared' can't be null";
        }
        $allowedValues = $this->getClearedAllowableValues();
        if (!is_null($this->container['cleared']) && !in_array($this->container['cleared'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cleared', must be one of '%s'",
                $this->container['cleared'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['approved'] === null) {
            $invalidProperties[] = "'approved' can't be null";
        }
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!is_null($this->container['flag_color']) && !in_array($this->container['flag_color'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flag_color', must be one of '%s'",
                $this->container['flag_color'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The transaction date in ISO format (e.g. 2016-12-01)
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The transaction amount in milliunits format
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return string
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param string $cleared The cleared status of the transaction
     *
     * @return self
     */
    public function setCleared($cleared)
    {
        $allowedValues = $this->getClearedAllowableValues();
        if (!in_array($cleared, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cleared', must be one of '%s'",
                    $cleared,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved Whether or not the transaction is approved
     *
     * @return self
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets flag_color
     *
     * @return string|null
     */
    public function getFlagColor()
    {
        return $this->container['flag_color'];
    }

    /**
     * Sets flag_color
     *
     * @param string|null $flag_color The transaction flag
     *
     * @return self
     */
    public function setFlagColor($flag_color)
    {
        $allowedValues = $this->getFlagColorAllowableValues();
        if (!is_null($flag_color) && !in_array($flag_color, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flag_color', must be one of '%s'",
                    $flag_color,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flag_color'] = $flag_color;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets payee_id
     *
     * @return string|null
     */
    public function getPayeeId()
    {
        return $this->container['payee_id'];
    }

    /**
     * Sets payee_id
     *
     * @param string|null $payee_id payee_id
     *
     * @return self
     */
    public function setPayeeId($payee_id)
    {
        $this->container['payee_id'] = $payee_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id category_id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets transfer_account_id
     *
     * @return string|null
     */
    public function getTransferAccountId()
    {
        return $this->container['transfer_account_id'];
    }

    /**
     * Sets transfer_account_id
     *
     * @param string|null $transfer_account_id If a transfer transaction, the account to which it transfers
     *
     * @return self
     */
    public function setTransferAccountId($transfer_account_id)
    {
        $this->container['transfer_account_id'] = $transfer_account_id;

        return $this;
    }

    /**
     * Gets transfer_transaction_id
     *
     * @return string|null
     */
    public function getTransferTransactionId()
    {
        return $this->container['transfer_transaction_id'];
    }

    /**
     * Sets transfer_transaction_id
     *
     * @param string|null $transfer_transaction_id If a transfer transaction, the id of transaction on the other side of the transfer
     *
     * @return self
     */
    public function setTransferTransactionId($transfer_transaction_id)
    {
        $this->container['transfer_transaction_id'] = $transfer_transaction_id;

        return $this;
    }

    /**
     * Gets matched_transaction_id
     *
     * @return string|null
     */
    public function getMatchedTransactionId()
    {
        return $this->container['matched_transaction_id'];
    }

    /**
     * Sets matched_transaction_id
     *
     * @param string|null $matched_transaction_id If transaction is matched, the id of the matched transaction
     *
     * @return self
     */
    public function setMatchedTransactionId($matched_transaction_id)
    {
        $this->container['matched_transaction_id'] = $matched_transaction_id;

        return $this;
    }

    /**
     * Gets import_id
     *
     * @return string|null
     */
    public function getImportId()
    {
        return $this->container['import_id'];
    }

    /**
     * Sets import_id
     *
     * @param string|null $import_id If the Transaction was imported, this field is a unique (by account) import identifier.  If this transaction was imported through File Based Import or Direct Import and not through the API, the import_id will have the format: 'YNAB:[milliunit_amount]:[iso_date]:[occurrence]'.  For example, a transaction dated 2015-12-30 in the amount of -$294.23 USD would have an import_id of 'YNAB:-294230:2015-12-30:1'.  If a second transaction on the same account was imported and had the same date and same amount, its import_id would be 'YNAB:-294230:2015-12-30:2'.
     *
     * @return self
     */
    public function setImportId($import_id)
    {
        $this->container['import_id'] = $import_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not the transaction has been deleted.  Deleted transactions will only be included in delta requests.
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

