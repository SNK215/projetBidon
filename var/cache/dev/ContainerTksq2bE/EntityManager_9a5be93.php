<?php

namespace ContainerTksq2bE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ab2b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer555ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfc41e = [
        
    ];

    public function getConnection()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getConnection', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getMetadataFactory', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getExpressionBuilder', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'beginTransaction', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getCache', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'transactional', array('func' => $func), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'commit', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->commit();
    }

    public function rollback()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'rollback', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getClassMetadata', array('className' => $className), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'createQuery', array('dql' => $dql), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'createNamedQuery', array('name' => $name), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'createQueryBuilder', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'flush', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'clear', array('entityName' => $entityName), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->clear($entityName);
    }

    public function close()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'close', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->close();
    }

    public function persist($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'persist', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'remove', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'refresh', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'detach', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'merge', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'contains', array('entity' => $entity), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getEventManager', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getConfiguration', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'isOpen', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getUnitOfWork', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getProxyFactory', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'initializeObject', array('obj' => $obj), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'getFilters', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'isFiltersStateClean', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'hasFilters', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return $this->valueHolder5ab2b->hasFilters();
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

        $instance->initializer555ce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ab2b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ab2b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ab2b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__get', ['name' => $name], $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        if (isset(self::$publicPropertiesfc41e[$name])) {
            return $this->valueHolder5ab2b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ab2b;

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

        $targetObject = $this->valueHolder5ab2b;
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
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ab2b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ab2b;
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
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__isset', array('name' => $name), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ab2b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ab2b;
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
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__unset', array('name' => $name), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ab2b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ab2b;
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
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__clone', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        $this->valueHolder5ab2b = clone $this->valueHolder5ab2b;
    }

    public function __sleep()
    {
        $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, '__sleep', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;

        return array('valueHolder5ab2b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer555ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer555ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer555ce && ($this->initializer555ce->__invoke($valueHolder5ab2b, $this, 'initializeProxy', array(), $this->initializer555ce) || 1) && $this->valueHolder5ab2b = $valueHolder5ab2b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ab2b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ab2b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
