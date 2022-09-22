<?php

namespace ContainerE5w5W46;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d49f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24c77 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties94ffb = [
        
    ];

    public function getConnection()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getConnection', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getMetadataFactory', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getExpressionBuilder', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'beginTransaction', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getCache', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'transactional', array('func' => $func), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'commit', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->commit();
    }

    public function rollback()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'rollback', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getClassMetadata', array('className' => $className), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'createQuery', array('dql' => $dql), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'createNamedQuery', array('name' => $name), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'createQueryBuilder', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'flush', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'clear', array('entityName' => $entityName), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->clear($entityName);
    }

    public function close()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'close', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->close();
    }

    public function persist($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'persist', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'remove', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'refresh', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'detach', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'merge', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'contains', array('entity' => $entity), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getEventManager', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getConfiguration', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'isOpen', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getUnitOfWork', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getProxyFactory', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'initializeObject', array('obj' => $obj), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'getFilters', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'isFiltersStateClean', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'hasFilters', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return $this->valueHolder3d49f->hasFilters();
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

        $instance->initializer24c77 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3d49f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d49f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d49f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__get', ['name' => $name], $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        if (isset(self::$publicProperties94ffb[$name])) {
            return $this->valueHolder3d49f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d49f;

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

        $targetObject = $this->valueHolder3d49f;
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
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d49f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d49f;
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
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__isset', array('name' => $name), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d49f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d49f;
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
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__unset', array('name' => $name), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d49f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d49f;
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
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__clone', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        $this->valueHolder3d49f = clone $this->valueHolder3d49f;
    }

    public function __sleep()
    {
        $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, '__sleep', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;

        return array('valueHolder3d49f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24c77 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24c77;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24c77 && ($this->initializer24c77->__invoke($valueHolder3d49f, $this, 'initializeProxy', array(), $this->initializer24c77) || 1) && $this->valueHolder3d49f = $valueHolder3d49f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d49f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d49f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
