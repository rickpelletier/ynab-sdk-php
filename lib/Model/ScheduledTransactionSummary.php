<?php
/**
 * ScheduledTransactionSummary
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
 * ScheduledTransactionSummary Class Doc Comment
 *
 * @category Class
 * @package  RickPelletier\YnabSDKPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduledTransactionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledTransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'date_first' => '\DateTime',
        'date_next' => '\DateTime',
        'frequency' => 'string',
        'amount' => 'int',
        'memo' => 'string',
        'flag_color' => 'string',
        'account_id' => 'string',
        'payee_id' => 'string',
        'category_id' => 'string',
        'transfer_account_id' => 'string',
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
        'id' => 'uuid',
        'date_first' => 'date',
        'date_next' => 'date',
        'frequency' => null,
        'amount' => 'int64',
        'memo' => null,
        'flag_color' => null,
        'account_id' => 'uuid',
        'payee_id' => 'uuid',
        'category_id' => 'uuid',
        'transfer_account_id' => 'uuid',
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
        'date_first' => 'date_first',
        'date_next' => 'date_next',
        'frequency' => 'frequency',
        'amount' => 'amount',
        'memo' => 'memo',
        'flag_color' => 'flag_color',
        'account_id' => 'account_id',
        'payee_id' => 'payee_id',
        'category_id' => 'category_id',
        'transfer_account_id' => 'transfer_account_id',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date_first' => 'setDateFirst',
        'date_next' => 'setDateNext',
        'frequency' => 'setFrequency',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'flag_color' => 'setFlagColor',
        'account_id' => 'setAccountId',
        'payee_id' => 'setPayeeId',
        'category_id' => 'setCategoryId',
        'transfer_account_id' => 'setTransferAccountId',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date_first' => 'getDateFirst',
        'date_next' => 'getDateNext',
        'frequency' => 'getFrequency',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'flag_color' => 'getFlagColor',
        'account_id' => 'getAccountId',
        'payee_id' => 'getPayeeId',
        'category_id' => 'getCategoryId',
        'transfer_account_id' => 'getTransferAccountId',
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

    const FREQUENCY_NEVER = 'never';
    const FREQUENCY_DAILY = 'daily';
    const FREQUENCY_WEEKLY = 'weekly';
    const FREQUENCY_EVERY_OTHER_WEEK = 'everyOtherWeek';
    const FREQUENCY_TWICE_A_MONTH = 'twiceAMonth';
    const FREQUENCY_EVERY4_WEEKS = 'every4Weeks';
    const FREQUENCY_MONTHLY = 'monthly';
    const FREQUENCY_EVERY_OTHER_MONTH = 'everyOtherMonth';
    const FREQUENCY_EVERY3_MONTHS = 'every3Months';
    const FREQUENCY_EVERY4_MONTHS = 'every4Months';
    const FREQUENCY_TWICE_A_YEAR = 'twiceAYear';
    const FREQUENCY_YEARLY = 'yearly';
    const FREQUENCY_EVERY_OTHER_YEAR = 'everyOtherYear';
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
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_NEVER,
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_EVERY_OTHER_WEEK,
            self::FREQUENCY_TWICE_A_MONTH,
            self::FREQUENCY_EVERY4_WEEKS,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_EVERY_OTHER_MONTH,
            self::FREQUENCY_EVERY3_MONTHS,
            self::FREQUENCY_EVERY4_MONTHS,
            self::FREQUENCY_TWICE_A_YEAR,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_EVERY_OTHER_YEAR,
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
        $this->container['date_first'] = $data['date_first'] ?? null;
        $this->container['date_next'] = $data['date_next'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['flag_color'] = $data['flag_color'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['payee_id'] = $data['payee_id'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['transfer_account_id'] = $data['transfer_account_id'] ?? null;
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
        if ($this->container['date_first'] === null) {
            $invalidProperties[] = "'date_first' can't be null";
        }
        if ($this->container['date_next'] === null) {
            $invalidProperties[] = "'date_next' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets date_first
     *
     * @return \DateTime
     */
    public function getDateFirst()
    {
        return $this->container['date_first'];
    }

    /**
     * Sets date_first
     *
     * @param \DateTime $date_first The first date for which the Scheduled Transaction was scheduled.
     *
     * @return self
     */
    public function setDateFirst($date_first)
    {
        $this->container['date_first'] = $date_first;

        return $this;
    }

    /**
     * Gets date_next
     *
     * @return \DateTime
     */
    public function getDateNext()
    {
        return $this->container['date_next'];
    }

    /**
     * Sets date_next
     *
     * @param \DateTime $date_next The next date for which the Scheduled Transaction is scheduled.
     *
     * @return self
     */
    public function setDateNext($date_next)
    {
        $this->container['date_next'] = $date_next;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

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
     * @param int $amount The scheduled transaction amount in milliunits format
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
     * @param string|null $flag_color The scheduled transaction flag
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
     * @param string|null $transfer_account_id If a transfer, the account_id which the scheduled transaction transfers to
     *
     * @return self
     */
    public function setTransferAccountId($transfer_account_id)
    {
        $this->container['transfer_account_id'] = $transfer_account_id;

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
     * @param bool $deleted Whether or not the scheduled transaction has been deleted.  Deleted scheduled transactions will only be included in delta requests.
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

