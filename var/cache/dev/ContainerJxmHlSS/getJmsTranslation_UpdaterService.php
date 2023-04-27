<?php

namespace ContainerJxmHlSS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsTranslation_UpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_translation.updater' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\Updater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Updater.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'ExtractorManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Logger'.\DIRECTORY_SEPARATOR.'LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'FileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'FileVisitorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nikic'.\DIRECTORY_SEPARATOR.'php-parser'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'PhpParser'.\DIRECTORY_SEPARATOR.'NodeVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'DefaultPhpFileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'DocParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'FileSourceFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'FormExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'TranslationContainerExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'NodeVisitor'.\DIRECTORY_SEPARATOR.'NodeVisitorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'NodeVisitor'.\DIRECTORY_SEPARATOR.'AbstractNodeVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'TwigFileExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'ValidationExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'File'.\DIRECTORY_SEPARATOR.'AuthenticationMessagesExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'FileWriter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'ArrayStructureDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PhpDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'XliffDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'SymfonyDumperAdapter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'YamlDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'FileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'PoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'MoFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'QtFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IniFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'IcuResFileDumper.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());
        $b = ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService());
        $c = new \Doctrine\Common\Annotations\DocParser();
        $c->setImports(['desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore']);
        $c->setIgnoreNotImportedAnnotations(true);
        $d = new \JMS\TranslationBundle\Translation\FileSourceFactory((($container->hasParameter("kernel.root_dir")) ? ($container->getParameter("kernel.root_dir")) : ($container->getParameter("kernel.project_dir"))), \dirname(__DIR__, 4));
        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');
        $e->setAddDate(true);
        $e->setAddReference(true);
        $f = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $f->setSourceLanguage('en');
        $f->setAddDate(true);
        $f->setAddReference(true);

        return $container->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater(($container->privates['jms_translation.loader_manager'] ?? $container->load('getJmsTranslation_LoaderManagerService')), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($a, $b, [0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($c, $d), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($c, $d), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($a, $d), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService())), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($c, $d)]), $b, []), $b, new \JMS\TranslationBundle\Translation\FileWriter(['php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $e, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.po'] ?? ($container->privates['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper())), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.mo'] ?? ($container->privates['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper())), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'yaml' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.yaml'] ?? ($container->privates['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'))), 'yaml'), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.qt'] ?? ($container->privates['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper())), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.csv'] ?? ($container->privates['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper())), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.ini'] ?? ($container->privates['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper())), 'ini'), 'json' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.json'] ?? ($container->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper())), 'json'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(($container->privates['translation.dumper.res'] ?? ($container->privates['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper())), 'res'), 'xliff' => $f]));
    }
}
