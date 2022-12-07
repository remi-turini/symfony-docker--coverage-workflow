<?php

namespace Container3O0PUVU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d99f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10d6d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties012c1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getConnection', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getMetadataFactory', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getExpressionBuilder', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'beginTransaction', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getCache', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'transactional', array('func' => $func), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'commit', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->commit();
    }

    public function rollback()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'rollback', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getClassMetadata', array('className' => $className), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'createQuery', array('dql' => $dql), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'createNamedQuery', array('name' => $name), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'createQueryBuilder', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'flush', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'clear', array('entityName' => $entityName), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->clear($entityName);
    }

    public function close()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'close', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->close();
    }

    public function persist($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'persist', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'remove', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'refresh', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'detach', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'merge', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'contains', array('entity' => $entity), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getEventManager', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getConfiguration', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'isOpen', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getUnitOfWork', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getProxyFactory', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'initializeObject', array('obj' => $obj), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'getFilters', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'isFiltersStateClean', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'hasFilters', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return $this->valueHolder7d99f->hasFilters();
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

        $instance->initializer10d6d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7d99f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d99f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d99f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__get', ['name' => $name], $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        if (isset(self::$publicProperties012c1[$name])) {
            return $this->valueHolder7d99f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d99f;

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

        $targetObject = $this->valueHolder7d99f;
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
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d99f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d99f;
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
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__isset', array('name' => $name), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d99f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d99f;
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
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__unset', array('name' => $name), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d99f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d99f;
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
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__clone', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        $this->valueHolder7d99f = clone $this->valueHolder7d99f;
    }

    public function __sleep()
    {
        $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, '__sleep', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;

        return array('valueHolder7d99f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10d6d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10d6d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10d6d && ($this->initializer10d6d->__invoke($valueHolder7d99f, $this, 'initializeProxy', array(), $this->initializer10d6d) || 1) && $this->valueHolder7d99f = $valueHolder7d99f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d99f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d99f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
