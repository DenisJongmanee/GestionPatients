<?php

namespace ContainerD1FkxCf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderddea3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55061 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4c13 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getConnection', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getMetadataFactory', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getExpressionBuilder', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'beginTransaction', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getCache', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'transactional', array('func' => $func), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'commit', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->commit();
    }

    public function rollback()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'rollback', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getClassMetadata', array('className' => $className), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'createQuery', array('dql' => $dql), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'createNamedQuery', array('name' => $name), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'createQueryBuilder', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'flush', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'clear', array('entityName' => $entityName), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->clear($entityName);
    }

    public function close()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'close', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->close();
    }

    public function persist($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'persist', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'remove', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'refresh', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'detach', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'merge', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'contains', array('entity' => $entity), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getEventManager', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getConfiguration', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'isOpen', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getUnitOfWork', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getProxyFactory', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'initializeObject', array('obj' => $obj), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'getFilters', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'isFiltersStateClean', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'hasFilters', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return $this->valueHolderddea3->hasFilters();
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

        $instance->initializer55061 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderddea3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderddea3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderddea3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__get', ['name' => $name], $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        if (isset(self::$publicPropertiesd4c13[$name])) {
            return $this->valueHolderddea3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddea3;

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

        $targetObject = $this->valueHolderddea3;
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
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddea3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderddea3;
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
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__isset', array('name' => $name), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddea3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderddea3;
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
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__unset', array('name' => $name), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderddea3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderddea3;
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
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__clone', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        $this->valueHolderddea3 = clone $this->valueHolderddea3;
    }

    public function __sleep()
    {
        $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, '__sleep', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;

        return array('valueHolderddea3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55061 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55061;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55061 && ($this->initializer55061->__invoke($valueHolderddea3, $this, 'initializeProxy', array(), $this->initializer55061) || 1) && $this->valueHolderddea3 = $valueHolderddea3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderddea3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderddea3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
