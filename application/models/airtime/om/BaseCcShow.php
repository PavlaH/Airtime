<?php


/**
 * Base class that represents a row from the 'cc_show' table.
 *
 * 
 *
 * @package    propel.generator.airtime.om
 */
abstract class BaseCcShow extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'CcShowPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CcShowPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the repeats field.
	 * @var        int
	 */
	protected $repeats;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * @var        array CcShowDays[] Collection to store aggregation of CcShowDays objects.
	 */
	protected $collCcShowDayss;

	/**
	 * @var        array CcShowHosts[] Collection to store aggregation of CcShowHosts objects.
	 */
	protected $collCcShowHostss;

	/**
	 * @var        array CcShowSchedule[] Collection to store aggregation of CcShowSchedule objects.
	 */
	protected $collCcShowSchedules;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->name = '';
	}

	/**
	 * Initializes internal state of BaseCcShow object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getDbId()
	{
		return $this->id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getDbName()
	{
		return $this->name;
	}

	/**
	 * Get the [repeats] column value.
	 * 
	 * @return     int
	 */
	public function getDbRepeats()
	{
		return $this->repeats;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDbDescription()
	{
		return $this->description;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     CcShow The current object (for fluent API support)
	 */
	public function setDbId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CcShowPeer::ID;
		}

		return $this;
	} // setDbId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     CcShow The current object (for fluent API support)
	 */
	public function setDbName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v || $this->isNew()) {
			$this->name = $v;
			$this->modifiedColumns[] = CcShowPeer::NAME;
		}

		return $this;
	} // setDbName()

	/**
	 * Set the value of [repeats] column.
	 * 
	 * @param      int $v new value
	 * @return     CcShow The current object (for fluent API support)
	 */
	public function setDbRepeats($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->repeats !== $v) {
			$this->repeats = $v;
			$this->modifiedColumns[] = CcShowPeer::REPEATS;
		}

		return $this;
	} // setDbRepeats()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     CcShow The current object (for fluent API support)
	 */
	public function setDbDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = CcShowPeer::DESCRIPTION;
		}

		return $this;
	} // setDbDescription()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->name !== '') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->repeats = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = CcShowPeer::NUM_COLUMNS - CcShowPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CcShow object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CcShowPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collCcShowDayss = null;

			$this->collCcShowHostss = null;

			$this->collCcShowSchedules = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CcShowQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcShowPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				CcShowPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CcShowPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CcShowPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CcShowPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setDbId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = CcShowPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCcShowDayss !== null) {
				foreach ($this->collCcShowDayss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCcShowHostss !== null) {
				foreach ($this->collCcShowHostss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCcShowSchedules !== null) {
				foreach ($this->collCcShowSchedules as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = CcShowPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCcShowDayss !== null) {
					foreach ($this->collCcShowDayss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCcShowHostss !== null) {
					foreach ($this->collCcShowHostss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCcShowSchedules !== null) {
					foreach ($this->collCcShowSchedules as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CcShowPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDbId();
				break;
			case 1:
				return $this->getDbName();
				break;
			case 2:
				return $this->getDbRepeats();
				break;
			case 3:
				return $this->getDbDescription();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. 
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = CcShowPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDbId(),
			$keys[1] => $this->getDbName(),
			$keys[2] => $this->getDbRepeats(),
			$keys[3] => $this->getDbDescription(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CcShowPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDbId($value);
				break;
			case 1:
				$this->setDbName($value);
				break;
			case 2:
				$this->setDbRepeats($value);
				break;
			case 3:
				$this->setDbDescription($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CcShowPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDbId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDbName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDbRepeats($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDbDescription($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CcShowPeer::DATABASE_NAME);

		if ($this->isColumnModified(CcShowPeer::ID)) $criteria->add(CcShowPeer::ID, $this->id);
		if ($this->isColumnModified(CcShowPeer::NAME)) $criteria->add(CcShowPeer::NAME, $this->name);
		if ($this->isColumnModified(CcShowPeer::REPEATS)) $criteria->add(CcShowPeer::REPEATS, $this->repeats);
		if ($this->isColumnModified(CcShowPeer::DESCRIPTION)) $criteria->add(CcShowPeer::DESCRIPTION, $this->description);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CcShowPeer::DATABASE_NAME);
		$criteria->add(CcShowPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getDbId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setDbId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getDbId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of CcShow (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDbName($this->name);
		$copyObj->setDbRepeats($this->repeats);
		$copyObj->setDbDescription($this->description);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCcShowDayss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCcShowDays($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getCcShowHostss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCcShowHosts($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getCcShowSchedules() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCcShowSchedule($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setDbId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     CcShow Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     CcShowPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CcShowPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collCcShowDayss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCcShowDayss()
	 */
	public function clearCcShowDayss()
	{
		$this->collCcShowDayss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCcShowDayss collection.
	 *
	 * By default this just sets the collCcShowDayss collection to an empty array (like clearcollCcShowDayss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCcShowDayss()
	{
		$this->collCcShowDayss = new PropelObjectCollection();
		$this->collCcShowDayss->setModel('CcShowDays');
	}

	/**
	 * Gets an array of CcShowDays objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CcShow is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CcShowDays[] List of CcShowDays objects
	 * @throws     PropelException
	 */
	public function getCcShowDayss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCcShowDayss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowDayss) {
				// return empty collection
				$this->initCcShowDayss();
			} else {
				$collCcShowDayss = CcShowDaysQuery::create(null, $criteria)
					->filterByCcShow($this)
					->find($con);
				if (null !== $criteria) {
					return $collCcShowDayss;
				}
				$this->collCcShowDayss = $collCcShowDayss;
			}
		}
		return $this->collCcShowDayss;
	}

	/**
	 * Returns the number of related CcShowDays objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CcShowDays objects.
	 * @throws     PropelException
	 */
	public function countCcShowDayss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCcShowDayss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowDayss) {
				return 0;
			} else {
				$query = CcShowDaysQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCcShow($this)
					->count($con);
			}
		} else {
			return count($this->collCcShowDayss);
		}
	}

	/**
	 * Method called to associate a CcShowDays object to this object
	 * through the CcShowDays foreign key attribute.
	 *
	 * @param      CcShowDays $l CcShowDays
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCcShowDays(CcShowDays $l)
	{
		if ($this->collCcShowDayss === null) {
			$this->initCcShowDayss();
		}
		if (!$this->collCcShowDayss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCcShowDayss[]= $l;
			$l->setCcShow($this);
		}
	}

	/**
	 * Clears out the collCcShowHostss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCcShowHostss()
	 */
	public function clearCcShowHostss()
	{
		$this->collCcShowHostss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCcShowHostss collection.
	 *
	 * By default this just sets the collCcShowHostss collection to an empty array (like clearcollCcShowHostss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCcShowHostss()
	{
		$this->collCcShowHostss = new PropelObjectCollection();
		$this->collCcShowHostss->setModel('CcShowHosts');
	}

	/**
	 * Gets an array of CcShowHosts objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CcShow is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CcShowHosts[] List of CcShowHosts objects
	 * @throws     PropelException
	 */
	public function getCcShowHostss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCcShowHostss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowHostss) {
				// return empty collection
				$this->initCcShowHostss();
			} else {
				$collCcShowHostss = CcShowHostsQuery::create(null, $criteria)
					->filterByCcShow($this)
					->find($con);
				if (null !== $criteria) {
					return $collCcShowHostss;
				}
				$this->collCcShowHostss = $collCcShowHostss;
			}
		}
		return $this->collCcShowHostss;
	}

	/**
	 * Returns the number of related CcShowHosts objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CcShowHosts objects.
	 * @throws     PropelException
	 */
	public function countCcShowHostss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCcShowHostss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowHostss) {
				return 0;
			} else {
				$query = CcShowHostsQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCcShow($this)
					->count($con);
			}
		} else {
			return count($this->collCcShowHostss);
		}
	}

	/**
	 * Method called to associate a CcShowHosts object to this object
	 * through the CcShowHosts foreign key attribute.
	 *
	 * @param      CcShowHosts $l CcShowHosts
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCcShowHosts(CcShowHosts $l)
	{
		if ($this->collCcShowHostss === null) {
			$this->initCcShowHostss();
		}
		if (!$this->collCcShowHostss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCcShowHostss[]= $l;
			$l->setCcShow($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CcShow is new, it will return
	 * an empty collection; or if this CcShow has previously
	 * been saved, it will retrieve related CcShowHostss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CcShow.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CcShowHosts[] List of CcShowHosts objects
	 */
	public function getCcShowHostssJoinCcSubjs($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CcShowHostsQuery::create(null, $criteria);
		$query->joinWith('CcSubjs', $join_behavior);

		return $this->getCcShowHostss($query, $con);
	}

	/**
	 * Clears out the collCcShowSchedules collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCcShowSchedules()
	 */
	public function clearCcShowSchedules()
	{
		$this->collCcShowSchedules = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCcShowSchedules collection.
	 *
	 * By default this just sets the collCcShowSchedules collection to an empty array (like clearcollCcShowSchedules());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCcShowSchedules()
	{
		$this->collCcShowSchedules = new PropelObjectCollection();
		$this->collCcShowSchedules->setModel('CcShowSchedule');
	}

	/**
	 * Gets an array of CcShowSchedule objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CcShow is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CcShowSchedule[] List of CcShowSchedule objects
	 * @throws     PropelException
	 */
	public function getCcShowSchedules($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCcShowSchedules || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowSchedules) {
				// return empty collection
				$this->initCcShowSchedules();
			} else {
				$collCcShowSchedules = CcShowScheduleQuery::create(null, $criteria)
					->filterByCcShow($this)
					->find($con);
				if (null !== $criteria) {
					return $collCcShowSchedules;
				}
				$this->collCcShowSchedules = $collCcShowSchedules;
			}
		}
		return $this->collCcShowSchedules;
	}

	/**
	 * Returns the number of related CcShowSchedule objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CcShowSchedule objects.
	 * @throws     PropelException
	 */
	public function countCcShowSchedules(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCcShowSchedules || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcShowSchedules) {
				return 0;
			} else {
				$query = CcShowScheduleQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCcShow($this)
					->count($con);
			}
		} else {
			return count($this->collCcShowSchedules);
		}
	}

	/**
	 * Method called to associate a CcShowSchedule object to this object
	 * through the CcShowSchedule foreign key attribute.
	 *
	 * @param      CcShowSchedule $l CcShowSchedule
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCcShowSchedule(CcShowSchedule $l)
	{
		if ($this->collCcShowSchedules === null) {
			$this->initCcShowSchedules();
		}
		if (!$this->collCcShowSchedules->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCcShowSchedules[]= $l;
			$l->setCcShow($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->repeats = null;
		$this->description = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collCcShowDayss) {
				foreach ((array) $this->collCcShowDayss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collCcShowHostss) {
				foreach ((array) $this->collCcShowHostss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collCcShowSchedules) {
				foreach ((array) $this->collCcShowSchedules as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCcShowDayss = null;
		$this->collCcShowHostss = null;
		$this->collCcShowSchedules = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseCcShow