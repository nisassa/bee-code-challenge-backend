<?php

namespace Container6cNv6tq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1e19f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer98ab7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8149a = [
        
    ];

    public function getConnection()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getConnection', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getMetadataFactory', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getExpressionBuilder', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'beginTransaction', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getCache', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'transactional', array('func' => $func), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->transactional($func);
    }

    public function commit()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'commit', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->commit();
    }

    public function rollback()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'rollback', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getClassMetadata', array('className' => $className), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'createQuery', array('dql' => $dql), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'createNamedQuery', array('name' => $name), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'createQueryBuilder', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'flush', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'clear', array('entityName' => $entityName), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->clear($entityName);
    }

    public function close()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'close', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->close();
    }

    public function persist($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'persist', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'remove', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'refresh', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'detach', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'merge', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'contains', array('entity' => $entity), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getEventManager', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getConfiguration', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'isOpen', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getUnitOfWork', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getProxyFactory', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'initializeObject', array('obj' => $obj), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'getFilters', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'isFiltersStateClean', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'hasFilters', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return $this->valueHolder1e19f->hasFilters();
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

        $instance->initializer98ab7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1e19f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1e19f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1e19f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__get', ['name' => $name], $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        if (isset(self::$publicProperties8149a[$name])) {
            return $this->valueHolder1e19f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e19f;

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

        $targetObject = $this->valueHolder1e19f;
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
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e19f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e19f;
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
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__isset', array('name' => $name), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e19f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1e19f;
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
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__unset', array('name' => $name), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e19f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1e19f;
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
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__clone', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        $this->valueHolder1e19f = clone $this->valueHolder1e19f;
    }

    public function __sleep()
    {
        $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, '__sleep', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;

        return array('valueHolder1e19f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98ab7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98ab7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer98ab7 && ($this->initializer98ab7->__invoke($valueHolder1e19f, $this, 'initializeProxy', array(), $this->initializer98ab7) || 1) && $this->valueHolder1e19f = $valueHolder1e19f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1e19f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1e19f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
