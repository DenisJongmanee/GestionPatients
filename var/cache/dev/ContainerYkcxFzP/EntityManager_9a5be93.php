<?php

namespace ContainerYkcxFzP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60572 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd30e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9fa73 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getConnection', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getMetadataFactory', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getExpressionBuilder', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'beginTransaction', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getCache', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'transactional', array('func' => $func), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'commit', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->commit();
    }

    public function rollback()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'rollback', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getClassMetadata', array('className' => $className), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'createQuery', array('dql' => $dql), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'createNamedQuery', array('name' => $name), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'createQueryBuilder', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'flush', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'clear', array('entityName' => $entityName), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->clear($entityName);
    }

    public function close()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'close', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->close();
    }

    public function persist($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'persist', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'remove', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'refresh', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'detach', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'merge', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'contains', array('entity' => $entity), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getEventManager', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getConfiguration', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'isOpen', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getUnitOfWork', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getProxyFactory', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'initializeObject', array('obj' => $obj), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'getFilters', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'isFiltersStateClean', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'hasFilters', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return $this->valueHolder60572->hasFilters();
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

        $instance->initializerd30e0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder60572) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60572 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60572->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__get', ['name' => $name], $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        if (isset(self::$publicProperties9fa73[$name])) {
            return $this->valueHolder60572->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60572;

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

        $targetObject = $this->valueHolder60572;
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
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60572;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60572;
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
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__isset', array('name' => $name), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60572;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60572;
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
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__unset', array('name' => $name), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60572;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60572;
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
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__clone', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        $this->valueHolder60572 = clone $this->valueHolder60572;
    }

    public function __sleep()
    {
        $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, '__sleep', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;

        return array('valueHolder60572');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd30e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd30e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd30e0 && ($this->initializerd30e0->__invoke($valueHolder60572, $this, 'initializeProxy', array(), $this->initializerd30e0) || 1) && $this->valueHolder60572 = $valueHolder60572;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60572;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60572;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
