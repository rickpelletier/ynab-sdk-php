<?php
/**
 * BudgetDetail
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
 * BudgetDetail Class Doc Comment
 *
 * @category Class
 * @package  RickPelletier\YnabSDKPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BudgetDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BudgetDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'last_modified_on' => '\DateTime',
        'first_month' => '\DateTime',
        'last_month' => '\DateTime',
        'date_format' => '\RickPelletier\YnabSDKPHP\Model\DateFormat',
        'currency_format' => '\RickPelletier\YnabSDKPHP\Model\CurrencyFormat',
        'accounts' => '\RickPelletier\YnabSDKPHP\Model\Account[]',
        'payees' => '\RickPelletier\YnabSDKPHP\Model\Payee[]',
        'payee_locations' => '\RickPelletier\YnabSDKPHP\Model\PayeeLocation[]',
        'category_groups' => '\RickPelletier\YnabSDKPHP\Model\CategoryGroup[]',
        'categories' => '\RickPelletier\YnabSDKPHP\Model\Category[]',
        'months' => '\RickPelletier\YnabSDKPHP\Model\MonthDetail[]',
        'transactions' => '\RickPelletier\YnabSDKPHP\Model\TransactionSummary[]',
        'subtransactions' => '\RickPelletier\YnabSDKPHP\Model\SubTransaction[]',
        'scheduled_transactions' => '\RickPelletier\YnabSDKPHP\Model\ScheduledTransactionSummary[]',
        'scheduled_subtransactions' => '\RickPelletier\YnabSDKPHP\Model\ScheduledSubTransaction[]'
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
        'name' => null,
        'last_modified_on' => 'date-time',
        'first_month' => 'date',
        'last_month' => 'date',
        'date_format' => null,
        'currency_format' => null,
        'accounts' => null,
        'payees' => null,
        'payee_locations' => null,
        'category_groups' => null,
        'categories' => null,
        'months' => null,
        'transactions' => null,
        'subtransactions' => null,
        'scheduled_transactions' => null,
        'scheduled_subtransactions' => null
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
        'name' => 'name',
        'last_modified_on' => 'last_modified_on',
        'first_month' => 'first_month',
        'last_month' => 'last_month',
        'date_format' => 'date_format',
        'currency_format' => 'currency_format',
        'accounts' => 'accounts',
        'payees' => 'payees',
        'payee_locations' => 'payee_locations',
        'category_groups' => 'category_groups',
        'categories' => 'categories',
        'months' => 'months',
        'transactions' => 'transactions',
        'subtransactions' => 'subtransactions',
        'scheduled_transactions' => 'scheduled_transactions',
        'scheduled_subtransactions' => 'scheduled_subtransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'last_modified_on' => 'setLastModifiedOn',
        'first_month' => 'setFirstMonth',
        'last_month' => 'setLastMonth',
        'date_format' => 'setDateFormat',
        'currency_format' => 'setCurrencyFormat',
        'accounts' => 'setAccounts',
        'payees' => 'setPayees',
        'payee_locations' => 'setPayeeLocations',
        'category_groups' => 'setCategoryGroups',
        'categories' => 'setCategories',
        'months' => 'setMonths',
        'transactions' => 'setTransactions',
        'subtransactions' => 'setSubtransactions',
        'scheduled_transactions' => 'setScheduledTransactions',
        'scheduled_subtransactions' => 'setScheduledSubtransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'last_modified_on' => 'getLastModifiedOn',
        'first_month' => 'getFirstMonth',
        'last_month' => 'getLastMonth',
        'date_format' => 'getDateFormat',
        'currency_format' => 'getCurrencyFormat',
        'accounts' => 'getAccounts',
        'payees' => 'getPayees',
        'payee_locations' => 'getPayeeLocations',
        'category_groups' => 'getCategoryGroups',
        'categories' => 'getCategories',
        'months' => 'getMonths',
        'transactions' => 'getTransactions',
        'subtransactions' => 'getSubtransactions',
        'scheduled_transactions' => 'getScheduledTransactions',
        'scheduled_subtransactions' => 'getScheduledSubtransactions'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['last_modified_on'] = $data['last_modified_on'] ?? null;
        $this->container['first_month'] = $data['first_month'] ?? null;
        $this->container['last_month'] = $data['last_month'] ?? null;
        $this->container['date_format'] = $data['date_format'] ?? null;
        $this->container['currency_format'] = $data['currency_format'] ?? null;
        $this->container['accounts'] = $data['accounts'] ?? null;
        $this->container['payees'] = $data['payees'] ?? null;
        $this->container['payee_locations'] = $data['payee_locations'] ?? null;
        $this->container['category_groups'] = $data['category_groups'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['months'] = $data['months'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['subtransactions'] = $data['subtransactions'] ?? null;
        $this->container['scheduled_transactions'] = $data['scheduled_transactions'] ?? null;
        $this->container['scheduled_subtransactions'] = $data['scheduled_subtransactions'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets last_modified_on
     *
     * @return \DateTime|null
     */
    public function getLastModifiedOn()
    {
        return $this->container['last_modified_on'];
    }

    /**
     * Sets last_modified_on
     *
     * @param \DateTime|null $last_modified_on The last time any changes were made to the budget from either a web or mobile client
     *
     * @return self
     */
    public function setLastModifiedOn($last_modified_on)
    {
        $this->container['last_modified_on'] = $last_modified_on;

        return $this;
    }

    /**
     * Gets first_month
     *
     * @return \DateTime|null
     */
    public function getFirstMonth()
    {
        return $this->container['first_month'];
    }

    /**
     * Sets first_month
     *
     * @param \DateTime|null $first_month The earliest budget month
     *
     * @return self
     */
    public function setFirstMonth($first_month)
    {
        $this->container['first_month'] = $first_month;

        return $this;
    }

    /**
     * Gets last_month
     *
     * @return \DateTime|null
     */
    public function getLastMonth()
    {
        return $this->container['last_month'];
    }

    /**
     * Sets last_month
     *
     * @param \DateTime|null $last_month The latest budget month
     *
     * @return self
     */
    public function setLastMonth($last_month)
    {
        $this->container['last_month'] = $last_month;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return \RickPelletier\YnabSDKPHP\Model\DateFormat|null
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param \RickPelletier\YnabSDKPHP\Model\DateFormat|null $date_format date_format
     *
     * @return self
     */
    public function setDateFormat($date_format)
    {
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets currency_format
     *
     * @return \RickPelletier\YnabSDKPHP\Model\CurrencyFormat|null
     */
    public function getCurrencyFormat()
    {
        return $this->container['currency_format'];
    }

    /**
     * Sets currency_format
     *
     * @param \RickPelletier\YnabSDKPHP\Model\CurrencyFormat|null $currency_format currency_format
     *
     * @return self
     */
    public function setCurrencyFormat($currency_format)
    {
        $this->container['currency_format'] = $currency_format;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \RickPelletier\YnabSDKPHP\Model\Account[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \RickPelletier\YnabSDKPHP\Model\Account[]|null $accounts accounts
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets payees
     *
     * @return \RickPelletier\YnabSDKPHP\Model\Payee[]|null
     */
    public function getPayees()
    {
        return $this->container['payees'];
    }

    /**
     * Sets payees
     *
     * @param \RickPelletier\YnabSDKPHP\Model\Payee[]|null $payees payees
     *
     * @return self
     */
    public function setPayees($payees)
    {
        $this->container['payees'] = $payees;

        return $this;
    }

    /**
     * Gets payee_locations
     *
     * @return \RickPelletier\YnabSDKPHP\Model\PayeeLocation[]|null
     */
    public function getPayeeLocations()
    {
        return $this->container['payee_locations'];
    }

    /**
     * Sets payee_locations
     *
     * @param \RickPelletier\YnabSDKPHP\Model\PayeeLocation[]|null $payee_locations payee_locations
     *
     * @return self
     */
    public function setPayeeLocations($payee_locations)
    {
        $this->container['payee_locations'] = $payee_locations;

        return $this;
    }

    /**
     * Gets category_groups
     *
     * @return \RickPelletier\YnabSDKPHP\Model\CategoryGroup[]|null
     */
    public function getCategoryGroups()
    {
        return $this->container['category_groups'];
    }

    /**
     * Sets category_groups
     *
     * @param \RickPelletier\YnabSDKPHP\Model\CategoryGroup[]|null $category_groups category_groups
     *
     * @return self
     */
    public function setCategoryGroups($category_groups)
    {
        $this->container['category_groups'] = $category_groups;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \RickPelletier\YnabSDKPHP\Model\Category[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \RickPelletier\YnabSDKPHP\Model\Category[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets months
     *
     * @return \RickPelletier\YnabSDKPHP\Model\MonthDetail[]|null
     */
    public function getMonths()
    {
        return $this->container['months'];
    }

    /**
     * Sets months
     *
     * @param \RickPelletier\YnabSDKPHP\Model\MonthDetail[]|null $months months
     *
     * @return self
     */
    public function setMonths($months)
    {
        $this->container['months'] = $months;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \RickPelletier\YnabSDKPHP\Model\TransactionSummary[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \RickPelletier\YnabSDKPHP\Model\TransactionSummary[]|null $transactions transactions
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets subtransactions
     *
     * @return \RickPelletier\YnabSDKPHP\Model\SubTransaction[]|null
     */
    public function getSubtransactions()
    {
        return $this->container['subtransactions'];
    }

    /**
     * Sets subtransactions
     *
     * @param \RickPelletier\YnabSDKPHP\Model\SubTransaction[]|null $subtransactions subtransactions
     *
     * @return self
     */
    public function setSubtransactions($subtransactions)
    {
        $this->container['subtransactions'] = $subtransactions;

        return $this;
    }

    /**
     * Gets scheduled_transactions
     *
     * @return \RickPelletier\YnabSDKPHP\Model\ScheduledTransactionSummary[]|null
     */
    public function getScheduledTransactions()
    {
        return $this->container['scheduled_transactions'];
    }

    /**
     * Sets scheduled_transactions
     *
     * @param \RickPelletier\YnabSDKPHP\Model\ScheduledTransactionSummary[]|null $scheduled_transactions scheduled_transactions
     *
     * @return self
     */
    public function setScheduledTransactions($scheduled_transactions)
    {
        $this->container['scheduled_transactions'] = $scheduled_transactions;

        return $this;
    }

    /**
     * Gets scheduled_subtransactions
     *
     * @return \RickPelletier\YnabSDKPHP\Model\ScheduledSubTransaction[]|null
     */
    public function getScheduledSubtransactions()
    {
        return $this->container['scheduled_subtransactions'];
    }

    /**
     * Sets scheduled_subtransactions
     *
     * @param \RickPelletier\YnabSDKPHP\Model\ScheduledSubTransaction[]|null $scheduled_subtransactions scheduled_subtransactions
     *
     * @return self
     */
    public function setScheduledSubtransactions($scheduled_subtransactions)
    {
        $this->container['scheduled_subtransactions'] = $scheduled_subtransactions;

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


