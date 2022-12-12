<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\Container2wAfSxq\App_KernelProdContainer::class, null);
require __DIR__.'/Container2wAfSxq/EntityManager_9a5be93.php';
require __DIR__.'/Container2wAfSxq/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/Container2wAfSxq/getValidator_ExpressionService.php';
require __DIR__.'/Container2wAfSxq/getValidator_EmailService.php';
require __DIR__.'/Container2wAfSxq/getValidator_BuilderService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Runtime_SerializerService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Form_RendererService.php';
require __DIR__.'/Container2wAfSxq/getTwig_Form_EngineService.php';
require __DIR__.'/Container2wAfSxq/getTwigService.php';
require __DIR__.'/Container2wAfSxq/getTranslatorService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_YmlService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_XliffService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_ResService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_QtService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_PoService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_PhpService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_MoService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_JsonService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_IniService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_DatService.php';
require __DIR__.'/Container2wAfSxq/getTranslation_Loader_CsvService.php';
require __DIR__.'/Container2wAfSxq/getSymfonycasts_ResetPassword_CleanerService.php';
require __DIR__.'/Container2wAfSxq/getSession_FactoryService.php';
require __DIR__.'/Container2wAfSxq/getServicesResetterService.php';
require __DIR__.'/Container2wAfSxq/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_UserValueResolverService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_HttpUtilsService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_ChannelListenerService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_AuthorizationCheckerService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Authenticator_JsonLogin_MainService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_AccessMapService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_AccessListenerService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Access_RoleHierarchyVoterService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Access_DecisionManagerService.php';
require __DIR__.'/Container2wAfSxq/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/Container2wAfSxq/getSecrets_VaultService.php';
require __DIR__.'/Container2wAfSxq/getRouting_LoaderService.php';
require __DIR__.'/Container2wAfSxq/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/Container2wAfSxq/getPropertyInfo_CacheService.php';
require __DIR__.'/Container2wAfSxq/getPropertyAccessorService.php';
require __DIR__.'/Container2wAfSxq/getMimeTypesService.php';
require __DIR__.'/Container2wAfSxq/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/Container2wAfSxq/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/Container2wAfSxq/getMailer_TransportFactory_NullService.php';
require __DIR__.'/Container2wAfSxq/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/Container2wAfSxq/getMailer_MailerService.php';
require __DIR__.'/Container2wAfSxq/getFragment_Renderer_InlineService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/Container2wAfSxq/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/Container2wAfSxq/getForm_Type_FormService.php';
require __DIR__.'/Container2wAfSxq/getForm_Type_EntityService.php';
require __DIR__.'/Container2wAfSxq/getForm_Type_ColorService.php';
require __DIR__.'/Container2wAfSxq/getForm_Type_ChoiceService.php';
require __DIR__.'/Container2wAfSxq/getForm_ServerParamsService.php';
require __DIR__.'/Container2wAfSxq/getForm_RegistryService.php';
require __DIR__.'/Container2wAfSxq/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/Container2wAfSxq/getErrorControllerService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/Container2wAfSxq/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/Container2wAfSxq/getDoctrineService.php';
require __DIR__.'/Container2wAfSxq/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container2wAfSxq/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container2wAfSxq/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/Container2wAfSxq/getCache_ValidatorService.php';
require __DIR__.'/Container2wAfSxq/getCache_SystemClearerService.php';
require __DIR__.'/Container2wAfSxq/getCache_SystemService.php';
require __DIR__.'/Container2wAfSxq/getCache_SerializerService.php';
require __DIR__.'/Container2wAfSxq/getCache_PropertyInfoService.php';
require __DIR__.'/Container2wAfSxq/getCache_PropertyAccessService.php';
require __DIR__.'/Container2wAfSxq/getCache_GlobalClearerService.php';
require __DIR__.'/Container2wAfSxq/getCache_AppClearerService.php';
require __DIR__.'/Container2wAfSxq/getCache_AppService.php';
require __DIR__.'/Container2wAfSxq/getArgumentResolver_ServiceService.php';
require __DIR__.'/Container2wAfSxq/getAnnotations_ReaderService.php';
require __DIR__.'/Container2wAfSxq/getAnnotations_CachedReaderService.php';
require __DIR__.'/Container2wAfSxq/getTemplateControllerService.php';
require __DIR__.'/Container2wAfSxq/getRedirectControllerService.php';
require __DIR__.'/Container2wAfSxq/getLoginAuthenticatorService.php';
require __DIR__.'/Container2wAfSxq/getUserRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getTypeMedicationRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getResetPasswordRequestRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getPharmappConfigurationRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getNotificationPreferenceRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getMedicationUserRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getMedicationRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getMedicationInTakeRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getGoogleAuthRepositoryService.php';
require __DIR__.'/Container2wAfSxq/getUserControllerService.php';
require __DIR__.'/Container2wAfSxq/getMedicationControllerService.php';
require __DIR__.'/Container2wAfSxq/getLoginControllerService.php';
require __DIR__.'/Container2wAfSxq/get_Session_DeprecatedService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_PXhSQsUService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_NwM5KKfService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_Mx0UMmYService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_UBcWHDService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_MeZhy_TService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_Kn9Vk3zService.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_JAxyK91Service.php';
require __DIR__.'/Container2wAfSxq/get_ServiceLocator_6h6351Service.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_ValidatorService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_SessionService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_SerializerService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_FilesystemService.php';
require __DIR__.'/Container2wAfSxq/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\SymfonyCastsResetPasswordBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\MedicationController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator';
$classes[] = 'App\Repository\GoogleAuthRepository';
$classes[] = 'App\Repository\MedicationInTakeRepository';
$classes[] = 'App\Repository\MedicationRepository';
$classes[] = 'App\Repository\MedicationUserRepository';
$classes[] = 'App\Repository\NotificationPreferenceRepository';
$classes[] = 'App\Repository\PharmappConfigurationRepository';
$classes[] = 'App\Repository\ResetPasswordRequestRepository';
$classes[] = 'App\Repository\TypeMedicationRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\LoginAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'App\Security\AuthenticationEntryPoint';
$classes[] = 'App\Security\AccessDeniedHandler';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityGoogleAuth.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityMedication.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityMedicationInTake.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityMedicationUser.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityNotificationPreference.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityPharmappConfiguration.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityResetPasswordRequest.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityTypeMedication.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityUser.php';

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$preloaded = Preloader::preload($classes, $preloaded);