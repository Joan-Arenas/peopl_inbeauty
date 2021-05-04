<?php

namespace ContainerFToWrO2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6981c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82ad8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa1681 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getConnection', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getMetadataFactory', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getExpressionBuilder', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'beginTransaction', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getCache', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'transactional', array('func' => $func), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->transactional($func);
    }

    public function commit()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'commit', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->commit();
    }

    public function rollback()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'rollback', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getClassMetadata', array('className' => $className), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'createQuery', array('dql' => $dql), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'createNamedQuery', array('name' => $name), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'createQueryBuilder', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'flush', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'clear', array('entityName' => $entityName), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->clear($entityName);
    }

    public function close()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'close', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->close();
    }

    public function persist($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'persist', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'remove', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'refresh', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'detach', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'merge', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'contains', array('entity' => $entity), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getEventManager', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getConfiguration', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'isOpen', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getUnitOfWork', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getProxyFactory', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'initializeObject', array('obj' => $obj), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'getFilters', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'isFiltersStateClean', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'hasFilters', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return $this->valueHolder6981c->hasFilters();
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

        $instance->initializer82ad8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6981c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6981c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6981c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__get', ['name' => $name], $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        if (isset(self::$publicPropertiesa1681[$name])) {
            return $this->valueHolder6981c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6981c;

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

        $targetObject = $this->valueHolder6981c;
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
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6981c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6981c;
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
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__isset', array('name' => $name), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6981c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6981c;
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
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__unset', array('name' => $name), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6981c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6981c;
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
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__clone', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        $this->valueHolder6981c = clone $this->valueHolder6981c;
    }

    public function __sleep()
    {
        $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, '__sleep', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;

        return array('valueHolder6981c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82ad8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82ad8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82ad8 && ($this->initializer82ad8->__invoke($valueHolder6981c, $this, 'initializeProxy', array(), $this->initializer82ad8) || 1) && $this->valueHolder6981c = $valueHolder6981c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6981c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6981c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
