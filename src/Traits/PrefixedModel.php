<?php namespace Xannn94\Support\Traits;

/**
 * Trait     PrefixedModel
 *
 * @package  Xannn94\Support\Traits
 * @author   Xannn94 <axiles94@gmail.com>
 */
trait PrefixedModel
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * The table prefix.
     *
     * @var string|null
     */
    protected $prefix;

    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return $this->getPrefix() . parent::getTable();
    }

    /**
     * Get the prefix table associated with the model.
     *
     * @return null|string
     */
    public function getPrefix()
    {
        return $this->isPrefixed() ? $this->prefix : '';
    }

    /**
     * Set the prefix table associated with the model.
     *
     * @param  string  $prefix
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /* ------------------------------------------------------------------------------------------------
     |  Check Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Check if table is prefixed.
     *
     * @return bool
     */
    public function isPrefixed()
    {
        return ! is_null($this->prefix);
    }
}
