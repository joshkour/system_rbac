<?php

namespace App\Services\Interfaces;

/**
 * CacheInterface interface.
 *
 * Interface for caching result.
 *
 * @author Josh Kour <josh.kour@gmail.com>
 */
interface CacheInterface
{
    /**
     * Check if cache key exist.
     *
     * @param string $key
     * @param bool
     */
    public function exist(string $key) : bool;

	/**
     * Abstraction to get value given key from cache store.
     *
     * @param string $key
     */
    public function get(string $key);

    /**
     * Abstraction to save value into cache store with given key.
     *
     * @param string $key
     * @param $value
     * @return bool
     */
    public function save(string $key, $value) : bool;
}