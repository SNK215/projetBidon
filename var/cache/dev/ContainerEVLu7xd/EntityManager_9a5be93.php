<?php

namespace ContainerEVLu7xd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder75c5b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer07f3f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7cc14 = [
        
    ];

    public function getConnection()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getConnection', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getMetadataFactory', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getExpressionBuilder', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'beginTransaction', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getCache', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'transactional', array('func' => $func), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'commit', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->commit();
    }

    public function rollback()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'rollback', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getClassMetadata', array('className' => $className), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'createQuery', array('dql' => $dql), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'createNamedQuery', array('name' => $name), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'createQueryBuilder', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'flush', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'clear', array('entityName' => $entityName), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->clear($entityName);
    }

    public function close()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'close', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->close();
    }

    public function persist($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'persist', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'remove', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'refresh', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'detach', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'merge', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'contains', array('entity' => $entity), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getEventManager', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getConfiguration', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'isOpen', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getUnitOfWork', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getProxyFactory', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'initializeObject', array('obj' => $obj), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'getFilters', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'isFiltersStateClean', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'hasFilters', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return $this->valueHolder75c5b->hasFilters();
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

        $instance->initializer07f3f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder75c5b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75c5b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder75c5b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__get', ['name' => $name], $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        if (isset(self::$publicProperties7cc14[$name])) {
            return $this->valueHolder75c5b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75c5b;

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

        $targetObject = $this->valueHolder75c5b;
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
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75c5b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder75c5b;
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
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__isset', array('name' => $name), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75c5b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder75c5b;
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
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__unset', array('name' => $name), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75c5b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder75c5b;
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
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__clone', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        $this->valueHolder75c5b = clone $this->valueHolder75c5b;
    }

    public function __sleep()
    {
        $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, '__sleep', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;

        return array('valueHolder75c5b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer07f3f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer07f3f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer07f3f && ($this->initializer07f3f->__invoke($valueHolder75c5b, $this, 'initializeProxy', array(), $this->initializer07f3f) || 1) && $this->valueHolder75c5b = $valueHolder75c5b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75c5b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75c5b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
