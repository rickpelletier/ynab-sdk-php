<?php
/**
 * SubTransaction
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
 * SubTransaction Class Doc Comment
 *
 * @category Class
 * @package  RickPelletier\YnabSDKPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'transaction_id' => 'string',
        'amount' => 'int',
        'memo' => 'string',
        'payee_id' => 'string',
        'payee_name' => 'string',
        'category_id' => 'string',
        'category_name' => 'string',
        'transfer_account_id' => 'string',
        'transfer_transaction_id' => 'string',
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
        'transaction_id' => null,
        'amount' => 'int64',
        'memo' => null,
        'payee_id' => 'uuid',
        'payee_name' => null,
        'category_id' => 'uuid',
        'category_name' => null,
        'transfer_account_id' => 'uuid',
        'transfer_transaction_id' => null,
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
        'transaction_id' => 'transaction_id',
        'amount' => 'amount',
        'memo' => 'memo',
        'payee_id' => 'payee_id',
        'payee_name' => 'payee_name',
        'category_id' => 'category_id',
        'category_name' => 'category_name',
        'transfer_account_id' => 'transfer_account_id',
        'transfer_transaction_id' => 'transfer_transaction_id',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transaction_id' => 'setTransactionId',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'payee_id' => 'setPayeeId',
        'payee_name' => 'setPayeeName',
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'transfer_account_id' => 'setTransferAccountId',
        'transfer_transaction_id' => 'setTransferTransactionId',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transaction_id' => 'getTransactionId',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'payee_id' => 'getPayeeId',
        'payee_name' => 'getPayeeName',
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'transfer_account_id' => 'getTransferAccountId',
        'transfer_transaction_id' => 'getTransferTransactionId',
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
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['payee_id'] = $data['payee_id'] ?? null;
        $this->container['payee_name'] = $data['payee_name'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['category_name'] = $data['category_name'] ?? null;
        $this->container['transfer_account_id'] = $data['transfer_account_id'] ?? null;
        $this->container['transfer_transaction_id'] = $data['transfer_transaction_id'] ?? null;
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
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * @param int $amount The subtransaction amount in milliunits format
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
     * Gets payee_name
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payee_name'];
    }

    /**
     * Sets payee_name
     *
     * @param string|null $payee_name payee_name
     *
     * @return self
     */
    public function setPayeeName($payee_name)
    {
        $this->container['payee_name'] = $payee_name;

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
     * Gets category_name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string|null $category_name category_name
     *
     * @return self
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

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
     * @param string|null $transfer_account_id If a transfer, the account_id which the subtransaction transfers to
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
     * @param string|null $transfer_transaction_id If a transfer, the id of transaction on the other side of the transfer
     *
     * @return self
     */
    public function setTransferTransactionId($transfer_transaction_id)
    {
        $this->container['transfer_transaction_id'] = $transfer_transaction_id;

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
     * @param bool $deleted Whether or not the subtransaction has been deleted.  Deleted subtransactions will only be included in delta requests.
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

