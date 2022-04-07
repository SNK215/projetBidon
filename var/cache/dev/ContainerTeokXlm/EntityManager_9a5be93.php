<?php

namespace ContainerTeokXlm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89b8a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13a65 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5fa7a = [
        
    ];

    public function getConnection()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getConnection', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getMetadataFactory', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getExpressionBuilder', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'beginTransaction', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getCache', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'transactional', array('func' => $func), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'commit', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->commit();
    }

    public function rollback()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'rollback', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getClassMetadata', array('className' => $className), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'createQuery', array('dql' => $dql), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'createNamedQuery', array('name' => $name), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'createQueryBuilder', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'flush', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'clear', array('entityName' => $entityName), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->clear($entityName);
    }

    public function close()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'close', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->close();
    }

    public function persist($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'persist', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'remove', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'refresh', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'detach', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'merge', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'contains', array('entity' => $entity), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getEventManager', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getConfiguration', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'isOpen', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getUnitOfWork', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getProxyFactory', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'initializeObject', array('obj' => $obj), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'getFilters', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'isFiltersStateClean', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'hasFilters', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return $this->valueHolder89b8a->hasFilters();
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

        $instance->initializer13a65 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89b8a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89b8a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89b8a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__get', ['name' => $name], $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        if (isset(self::$publicProperties5fa7a[$name])) {
            return $this->valueHolder89b8a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b8a;

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

        $targetObject = $this->valueHolder89b8a;
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
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b8a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89b8a;
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
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__isset', array('name' => $name), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b8a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89b8a;
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
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__unset', array('name' => $name), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b8a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89b8a;
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
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__clone', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        $this->valueHolder89b8a = clone $this->valueHolder89b8a;
    }

    public function __sleep()
    {
        $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, '__sleep', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;

        return array('valueHolder89b8a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13a65 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13a65;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13a65 && ($this->initializer13a65->__invoke($valueHolder89b8a, $this, 'initializeProxy', array(), $this->initializer13a65) || 1) && $this->valueHolder89b8a = $valueHolder89b8a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89b8a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89b8a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
