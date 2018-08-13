<?php

namespace Mzur\Kirby\DefuseSession;

use Kirby\Session\SessionStore;

class ArraySessionStore extends SessionStore
{
   /**
    * Array to store sessions to.
    *
    * @var array
    */
   protected $store;

   public function __construct()
   {
      $this->store = [];
   }

   /**
    * @inheritdoc
    */
   public function createId(int $expiryTime): string
   {
      return $this->generateId();
   }

   /**
    * @inheritdoc
    */
   public function exists(int $expiryTime, string $id): bool
   {
      return array_key_exists($id, $this->store);
   }

   /**
    * @inheritdoc
    */
    public function lock(int $expiryTime, string $id)
    {
      //
    }

    /**
    * @inheritdoc
    */
    public function unlock(int $expiryTime, string $id)
    {
      //
    }

    /**
    * @inheritdoc
    */
    public function get(int $expiryTime, string $id): string
    {
      return $this->store[$id] ?? null;
    }

    /**
    * @inheritdoc
    */
    public function set(int $expiryTime, string $id, string $data)
    {
      $this->store[$id] = $data;
    }

    /**
    * @inheritdoc
    */
    public function destroy(int $expiryTime, string $id)
    {
      unset($this->store[$id]);
    }

    /**
    * @inheritdoc
    */
    public function collectGarbage()
    {
      //
    }
}
