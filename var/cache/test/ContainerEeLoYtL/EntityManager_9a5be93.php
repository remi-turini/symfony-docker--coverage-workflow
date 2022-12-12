<?php

namespace ContainerEeLoYtL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb7684 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3e5e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d4bc = [
        
    ];

    public function getConnection()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getConnection', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getMetadataFactory', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getExpressionBuilder', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'beginTransaction', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getCache', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'transactional', array('func' => $func), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'commit', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->commit();
    }

    public function rollback()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'rollback', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getClassMetadata', array('className' => $className), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'createQuery', array('dql' => $dql), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'createNamedQuery', array('name' => $name), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'createQueryBuilder', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'flush', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'clear', array('entityName' => $entityName), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->clear($entityName);
    }

    public function close()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'close', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->close();
    }

    public function persist($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'persist', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'remove', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'refresh', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'detach', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'merge', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'contains', array('entity' => $entity), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getEventManager', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getConfiguration', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'isOpen', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getUnitOfWork', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getProxyFactory', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'initializeObject', array('obj' => $obj), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'getFilters', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'isFiltersStateClean', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'hasFilters', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return $this->valueHolderb7684->hasFilters();
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

        $instance->initializer3e5e2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb7684) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7684 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb7684->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__get', ['name' => $name], $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        if (isset(self::$publicProperties4d4bc[$name])) {
            return $this->valueHolderb7684->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7684;

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

        $targetObject = $this->valueHolderb7684;
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
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7684;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb7684;
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
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__isset', array('name' => $name), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7684;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb7684;
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
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__unset', array('name' => $name), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7684;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb7684;
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
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__clone', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        $this->valueHolderb7684 = clone $this->valueHolderb7684;
    }

    public function __sleep()
    {
        $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, '__sleep', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;

        return array('valueHolderb7684');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3e5e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3e5e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3e5e2 && ($this->initializer3e5e2->__invoke($valueHolderb7684, $this, 'initializeProxy', array(), $this->initializer3e5e2) || 1) && $this->valueHolderb7684 = $valueHolderb7684;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7684;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb7684;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
