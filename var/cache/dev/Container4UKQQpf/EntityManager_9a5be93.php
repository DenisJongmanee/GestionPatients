<?php

namespace Container4UKQQpf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd0fed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7bfbf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a596 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getConnection', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getMetadataFactory', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getExpressionBuilder', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'beginTransaction', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getCache', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'transactional', array('func' => $func), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'commit', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->commit();
    }

    public function rollback()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'rollback', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getClassMetadata', array('className' => $className), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'createQuery', array('dql' => $dql), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'createNamedQuery', array('name' => $name), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'createQueryBuilder', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'flush', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'clear', array('entityName' => $entityName), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->clear($entityName);
    }

    public function close()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'close', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->close();
    }

    public function persist($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'persist', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'remove', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'refresh', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'detach', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'merge', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'contains', array('entity' => $entity), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getEventManager', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getConfiguration', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'isOpen', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getUnitOfWork', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getProxyFactory', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'initializeObject', array('obj' => $obj), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'getFilters', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'isFiltersStateClean', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'hasFilters', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return $this->valueHolderd0fed->hasFilters();
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

        $instance->initializer7bfbf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd0fed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0fed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd0fed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__get', ['name' => $name], $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        if (isset(self::$publicProperties9a596[$name])) {
            return $this->valueHolderd0fed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0fed;

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

        $targetObject = $this->valueHolderd0fed;
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
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0fed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd0fed;
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
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__isset', array('name' => $name), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0fed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd0fed;
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
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__unset', array('name' => $name), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0fed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd0fed;
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
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__clone', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        $this->valueHolderd0fed = clone $this->valueHolderd0fed;
    }

    public function __sleep()
    {
        $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, '__sleep', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;

        return array('valueHolderd0fed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7bfbf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7bfbf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7bfbf && ($this->initializer7bfbf->__invoke($valueHolderd0fed, $this, 'initializeProxy', array(), $this->initializer7bfbf) || 1) && $this->valueHolderd0fed = $valueHolderd0fed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0fed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0fed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
