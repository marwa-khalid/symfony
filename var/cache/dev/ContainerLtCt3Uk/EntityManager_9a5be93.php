<?php

namespace ContainerLtCt3Uk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2ea2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8fe12 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties78cd5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getConnection', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getMetadataFactory', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getExpressionBuilder', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'beginTransaction', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getCache', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'transactional', array('func' => $func), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'commit', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->commit();
    }

    public function rollback()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'rollback', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getClassMetadata', array('className' => $className), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'createQuery', array('dql' => $dql), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'createNamedQuery', array('name' => $name), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'createQueryBuilder', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'flush', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'clear', array('entityName' => $entityName), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->clear($entityName);
    }

    public function close()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'close', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->close();
    }

    public function persist($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'persist', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'remove', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'refresh', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'detach', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'merge', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'contains', array('entity' => $entity), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getEventManager', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getConfiguration', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'isOpen', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getUnitOfWork', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getProxyFactory', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'initializeObject', array('obj' => $obj), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'getFilters', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'isFiltersStateClean', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'hasFilters', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return $this->valueHoldera2ea2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8fe12 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera2ea2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2ea2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2ea2->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__get', ['name' => $name], $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        if (isset(self::$publicProperties78cd5[$name])) {
            return $this->valueHoldera2ea2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2ea2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2ea2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2ea2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2ea2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__isset', array('name' => $name), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2ea2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2ea2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__unset', array('name' => $name), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2ea2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2ea2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__clone', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        $this->valueHoldera2ea2 = clone $this->valueHoldera2ea2;
    }

    public function __sleep()
    {
        $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, '__sleep', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;

        return array('valueHoldera2ea2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8fe12 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8fe12;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8fe12 && ($this->initializer8fe12->__invoke($valueHoldera2ea2, $this, 'initializeProxy', array(), $this->initializer8fe12) || 1) && $this->valueHoldera2ea2 = $valueHoldera2ea2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2ea2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2ea2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
