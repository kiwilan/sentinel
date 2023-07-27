<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1690455774,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.26',
  'phpVersion' => 80208,
  'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/Users/ewilan/Workspace/breeze/vendor/nunomaduro/larastan/bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: false, checkPhpDocMissingReturn: false, checkUnusedViews: false, tmpDir: /Users/ewilan/Workspace/breeze/public/build/.phpstan, paths: [/Users/ewilan/Workspace/breeze/app], level: 5, checkMissingIterableValueType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: NunoMaduro\\Larastan\\Properties\\ModelCastHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: NunoMaduro\\Larastan\\Rules\\UnusedViewsRule}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, NunoMaduro\\Larastan\\ReturnTypes\\AppMakeHelper, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationResolver, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationHelper, NunoMaduro\\Larastan\\Support\\HigherOrderCollectionProxyHelper], rules: [NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, NunoMaduro\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule]}',
  'analysedPaths' => 
  array (
    0 => '/Users/ewilan/Workspace/breeze/app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/ewilan/Workspace/breeze/composer.lock' => 'ec014fa84069a16d16cec54bb98536c8d19b9eaf',
  ),
  'composerInstalled' => 
  array (
    '/Users/ewilan/Workspace/breeze/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'artesaos/seotools' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '99744eaa8c3e21a2121914d8a7ca61284e5497a4',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../artesaos/seotools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bacon/bacon-qr-code' => 
        array (
          'pretty_version' => '2.0.8',
          'version' => '2.0.8.0',
          'reference' => '8674e51bb65af933a5ffaf1c308a660387c35c22',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../bacon/bacon-qr-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'barryvdh/laravel-ide-helper' => 
        array (
          'pretty_version' => 'v2.13.0',
          'version' => '2.13.0.0',
          'reference' => '81d5b223ff067a1f38e14c100997e153b837fe4a',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../barryvdh/laravel-ide-helper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/reflection-docblock' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'e6811e927f0ecc37cc4deaa6627033150343e597',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../barryvdh/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'blade-ui-kit/blade-heroicons' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'f756c807b0d04afd2caf7079bac26492da9cc6d4',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../blade-ui-kit/blade-heroicons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'blade-ui-kit/blade-icons' => 
        array (
          'pretty_version' => '1.5.2',
          'version' => '1.5.2.0',
          'reference' => '4d6b6b2548b1994a777211a985e18691701891e4',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../blade-ui-kit/blade-icons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ec6713d48856b7e8af64b2f94b084fb861bcc71b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.11.0',
          'version' => '0.11.0.0',
          'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'clue/stream-filter' => 
        array (
          'pretty_version' => 'v1.6.0',
          'version' => '1.6.0.0',
          'reference' => 'd6169430c7731d8509da7aecd0af756a5747b78e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../clue/stream-filter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '953cc4ea32e0c31f2185549c7d216d7921f03da9',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.1.0',
          'version' => '3.1.0.0',
          'reference' => '4bff79ddd77851fe3cdd11616ed3f92841ba5bd2',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'danharrin/date-format-converter' => 
        array (
          'pretty_version' => 'v0.3.0',
          'version' => '0.3.0.0',
          'reference' => '42b6ddc52059d4ba228a67c15adaaa0c039e75f2',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../danharrin/date-format-converter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dasprid/enum' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => '8e6b6ea76eabbf19ea2bf5b67b98e1860474012f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../dasprid/enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/cache' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '3.6.5',
          'version' => '3.6.5.0',
          'reference' => '96d5a70fd91efdcec81fc46316efc5bf3da17ddf',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/event-manager' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/event-manager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.8',
          'version' => '2.0.8.0',
          'reference' => 'f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.2',
          'version' => '3.3.2.0',
          'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3a85486b709bc384dae8eb78fb2eec649bdb64ff',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.23.0',
          'version' => '1.23.0.0',
          'reference' => 'e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '0.5.1',
          'version' => '0.5.1.0',
          'reference' => 'b58e5a3933e541dc286cc91fc4f3898bbc6f1623',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filament/actions' => 
        array (
          'pretty_version' => 'v3.0.0-beta17',
          'version' => '3.0.0.0-beta17',
          'reference' => 'c8652cd32c88a268ac20105bd25426fc41e3ca18',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filament/actions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/forms' => 
        array (
          'pretty_version' => 'v3.0.0-beta17',
          'version' => '3.0.0.0-beta17',
          'reference' => '0d09c3a1d3d8d49bbca07194d3481b33368e09cc',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filament/forms',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/infolists' => 
        array (
          'pretty_version' => 'v3.0.0-beta17',
          'version' => '3.0.0.0-beta17',
          'reference' => '6d2d7b257cd386dfdca3cd10c3f97eedca09ba60',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filament/infolists',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/notifications' => 
        array (
          'pretty_version' => 'v3.0.0-beta17',
          'version' => '3.0.0.0-beta17',
          'reference' => 'fdd4ffc3e4e2f8811a0260866d0fbd5ee075f675',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filament/notifications',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filament/support' => 
        array (
          'pretty_version' => 'v3.0.0-beta17',
          'version' => '3.0.0.0-beta17',
          'reference' => '7ea28733a3ac10507d79d4a0f30907c18d41f342',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filament/support',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.15.3',
          'version' => '2.15.3.0',
          'reference' => 'c83e88a30524f9360b11f585f71e6b17313b7187',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/laravel-telescope-toolbar' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '0a81294e8a2e2bd93188b6785da6a44a23c3d1ad',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../fruitcake/laravel-telescope-toolbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '3a494dc7dc1d7d12e511890177ae2d0e6c107da6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.5.0',
          'version' => '2.5.0.0',
          'reference' => 'b635f279edd83fc275f822a1188157ffea568ff6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'b945d74a55a25a949158444f09ec0d3c120d69e2',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'http-interop/http-factory-guzzle' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8f06e92b95405216b237521cc64c804dd44c4a81',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../http-interop/http-factory-guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.16.1',
          ),
        ),
        'intervention/image' => 
        array (
          'pretty_version' => '2.7.2',
          'version' => '2.7.2.0',
          'reference' => '04be355f8d6734c826045d02a1079ad658322dad',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../intervention/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kiwilan/sentinel-laravel' => 
        array (
          'pretty_version' => '0.0.21',
          'version' => '0.0.21.0',
          'reference' => 'af49a301939ed2ff8fdcdd9ad64d1eca31a57f3b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../kiwilan/sentinel-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kiwilan/steward-laravel' => 
        array (
          'pretty_version' => 'dev-main',
          'version' => 'dev-main',
          'reference' => '73a231d7d44194c61ce69ec68923ebb70b4aa2dd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../kiwilan/steward-laravel',
          'aliases' => 
          array (
            0 => '9999999-dev',
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/fortify' => 
        array (
          'pretty_version' => 'v1.17.4',
          'version' => '1.17.4.0',
          'reference' => '110dd0d09b70461d651218240120e24ba8d8cbe1',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/fortify',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.16.1',
          'version' => '10.16.1.0',
          'reference' => '5c93d2795c393b462481179ce42dedfb30cc19b5',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.10.5',
          'version' => '1.10.5.0',
          'reference' => 'a458fb057bfa2f5a09888a8aa349610be807b0c3',
          'type' => 'project',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.23.1',
          'version' => '1.23.1.0',
          'reference' => '62582606f80466aa81fba40b193b289106902853',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.2.5',
          'version' => '3.2.5.0',
          'reference' => '8ebda85d59d3c414863a7f4d816ef8302faad876',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/scout' => 
        array (
          'pretty_version' => 'v10.2.3',
          'version' => '10.2.3.0',
          'reference' => '51d662fb00728dcf726a9e53a234a05896da888a',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/scout',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'e5a3057a5591e1cfe8183034b0203921abe2c902',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/slack-notification-channel' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => '20d0f6ae89aed80696e7ff2c667369a4f270c08c',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/slack-notification-channel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/telescope' => 
        array (
          'pretty_version' => 'v4.15.2',
          'version' => '4.15.2.0',
          'reference' => '5d74ae4c9f269b756d7877ad1527770c59846e14',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/telescope',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.8.1',
          'version' => '2.8.1.0',
          'reference' => '04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'd44a24690f16b8c1808bf13b1bd54ae4c63ea048',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.15.1',
          'version' => '3.15.1.0',
          'reference' => 'a141d430414fcb8bf797a18716b09f759a385bed',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.15.0',
          'version' => '3.15.0.0',
          'reference' => '543f64c397fefdf9cfeac443ffb6beff602796b3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/glide' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '2ff92c8f1edc80b74e2d3c5efccfc7223f74d407',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/glide',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/html-to-markdown' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '0b4066eede55c48f38bcee4fb8f0aa85654390fd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/html-to-markdown',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '6.8.0',
          'version' => '6.8.0.0',
          'reference' => 'a700b4656e4c54371b799ac61e300ab25a2d1d39',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v3.0.0-beta.4',
          'version' => '3.0.0.0-beta4',
          'reference' => 'b57896e44397d7c5b1c42db64dba4c8382959357',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/volt' => 
        array (
          'pretty_version' => 'v1.0.0-beta.1',
          'version' => '1.0.0.0-beta1',
          'reference' => '7679954f4d9f089ff30bb460feeb98c8f7b929cd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../livewire/volt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '3c5d5a56d56f48a1ca08a0670f0f80c1dad368f3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'meilisearch/meilisearch-php' => 
        array (
          'pretty_version' => 'v1.2.1',
          'version' => '1.2.1.0',
          'reference' => 'c153714aaa947fb36779384999b65f6164247ed6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../meilisearch/meilisearch-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.4',
          'version' => '1.6.4.0',
          'reference' => 'd1413755e26fe56a63455f7753221c86cbb88f66',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'e2392369686d420ca32df3803de28b5d6f76867d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.68.1',
          'version' => '2.68.1.0',
          'reference' => '4f991ed2a403c85efbc4f23eb4030063fdbe01da',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'cacdbf5a91a657ede665c541eda28941d4b09c1e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.16.0',
          'version' => '4.16.0.0',
          'reference' => '19526a33fb561ef417e822e85f08a00db4059c17',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.7.0',
          'version' => '7.7.0.0',
          'reference' => '69a07197d055456d29911116fca3bc2c985f524b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v2.6.3',
          'version' => '2.6.3.0',
          'reference' => '73e5be5f5c732212ce6ca77ffd2753a136f36a23',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.1',
          'version' => '1.15.1.0',
          'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v2.6.3',
          'version' => '2.6.3.0',
          'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v2.9.5',
          'version' => '2.9.5.0',
          'reference' => 'be41181b435ce3d99d01be0d6c1e2602f153b82b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'e3a3da262b73bdcbf3fad4dc9846c3c4921f2147',
          'type' => 'composer-plugin',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v2.2.3',
          'version' => '2.2.3.0',
          'reference' => 'f44834b728b44028fb7d99c4e3efc88b699728a8',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'db6295986e3c506dbf37c16ddc64c4a83e96bd75',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/client-common' => 
        array (
          'pretty_version' => '2.7.0',
          'version' => '2.7.0.0',
          'reference' => '880509727a447474d2a71b7d7fa5d268ddd3db4b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../php-http/client-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'php-http/client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/discovery' => 
        array (
          'pretty_version' => '1.19.1',
          'version' => '1.19.1.0',
          'reference' => '57f3de01d32085fea20865f9b16fb0e69347c39e',
          'type' => 'composer-plugin',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../php-http/discovery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'php-http/httplug' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '625ad742c360c8ac580fcc647a1541d29e257f67',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../php-http/httplug',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'php-http/message' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '47a14338bf4ebd67d317bf1144253d7db4ab55fd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../php-http/message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'php-http/message-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'php-http/promise' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../php-http/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.3.0',
          'version' => '5.3.0.0',
          'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.7.2',
          'version' => '1.7.2.0',
          'reference' => 'b2fe4d22a5426f38e014855322200b97b5362c0d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.8.0',
          'version' => '5.8.0.0',
          'reference' => 'db1b3069b5dbc220d393d67ff911e0ae76732755',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.1',
          'version' => '1.9.1.0',
          'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '1.23.0',
          'version' => '1.23.0.0',
          'reference' => 'a2b24135c35852b348894320d47b3902a94bc494',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.26',
          'version' => '1.10.26.0',
          'reference' => '5d660cbb7e1b89253a47147ae44044f49832351f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.3',
          'version' => '10.1.3.0',
          'reference' => 'be1fe461fdc917de2a29a452ccf2657d325b443d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => '5647d65443818959172645e7ed999217360654b6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '9f3d3709577a527025f55bcf0f7ab8052c8bb37d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.2.6',
          'version' => '10.2.6.0',
          'reference' => '1c17815c129f133f3019cc18e8d0c8622e6d9bcd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pimple/pimple' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pimple/pimple',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => '80c3d801b31fe165f8fe99ea085e0a37834e1be3',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
            1 => '*',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
            1 => '^1.0',
            2 => '*',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '1.1',
          'version' => '1.1.0.0',
          'reference' => 'cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
            1 => '*',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.11.19',
          'version' => '0.11.19.0',
          'reference' => '1724ceff278daeeac5a006744633bacbb2dc4706',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.4',
          'version' => '4.7.4.0',
          'reference' => '60a4c63ab724854332900504274f6150ff26d286',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.4',
          ),
        ),
        'ryangjchandler/blade-capture-directive' => 
        array (
          'pretty_version' => 'v0.3.0',
          'version' => '0.3.0.0',
          'reference' => '62fd2ecb50b938a46025093bcb64fcaddd531f89',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../ryangjchandler/blade-capture-directive',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '72f01e6586e0caf6af81297897bd112eb7e9627c',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e67d240970c9dc7ea7b2123a6d520e334dd61dc6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '912dc2fbe3e3c1e7873313cc801b100b6c68c87b',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'f3ec4bf931c0b31e5b413f5b4fc970a7d03338c0',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '7ea9ead78f6d380d2a667864c132c2f7b83055e4',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '17c4d940ecafb3d15d2cf916f4108f664e28b130',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/color' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '49739265900cabce4640cd26c3266fd8d2cca390',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/color',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.4.1',
          'version' => '1.4.1.0',
          'reference' => '943894c6a6b00501365ac0b91ae0dce56f2226fa',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.9.0',
          'version' => '1.9.0.0',
          'reference' => 'de24ff1e01814d5043bd6eb4ab36a5a852a04973',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/image' => 
        array (
          'pretty_version' => '2.2.7',
          'version' => '2.2.7.0',
          'reference' => '2f802853aab017aa615224daae1588054b5ab20e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/image-optimizer' => 
        array (
          'pretty_version' => '1.7.1',
          'version' => '1.7.1.0',
          'reference' => 'af179994e2d2413e4b3ba2d348d06b4eaddbeb30',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/image-optimizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/invade' => 
        array (
          'pretty_version' => '1.1.1',
          'version' => '1.1.1.0',
          'reference' => 'd0a9c895a96152549d478a7e3420e19039eef038',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/invade',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-discord-alerts' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'c964208ed645fa4dc9af0575063067cfb69d96fd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-discord-alerts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => 'dd15fbe82ef5392798941efae93c49395a87d943',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.15.0',
          'version' => '1.15.0.0',
          'reference' => 'efab1844b8826443135201c4443690f032c3d533',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-query-builder' => 
        array (
          'pretty_version' => '5.2.0',
          'version' => '5.2.0.0',
          'reference' => '7b3911f61dcaa27804b80f30b73a468a9539e850',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-query-builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ray' => 
        array (
          'pretty_version' => '1.32.6',
          'version' => '1.32.6.0',
          'reference' => '8526dd6c6c838b4bac4e0df2ea7896b688b0d43e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-route-attributes' => 
        array (
          'pretty_version' => '1.18.2',
          'version' => '1.18.2.0',
          'reference' => '6f19ad379f79a8c87b3b21ee9c3b6dc72080123d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-route-attributes',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-settings' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '4ac597ffbb599a46032498309251b7a24346cb66',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/laravel-settings',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/macroable' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'ec2c320f932e730607aff8052c44183cf3ecb072',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/macroable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/ray' => 
        array (
          'pretty_version' => '1.37.2',
          'version' => '1.37.2.0',
          'reference' => 'dea16182d4bc9d9833adec7e39fbb3d7b553425d',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/temporary-directory' => 
        array (
          'pretty_version' => '2.1.2',
          'version' => '2.1.2.0',
          'reference' => '0c804873f6b4042aa8836839dca683c7d0f71831',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../spatie/temporary-directory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '8788808b07cf0bdd6e4b7fdd23d8ddb1470c83b7',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '88453e64cd86c5b60e8d2fb2c6f953bbc353ffbf',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '99d2d814a6351461af350ead4d963bd67451236f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '3af8ac1a3f98f6dbc55e10ae59c9e44bfc38dfaa',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'd9b01ba073c44cef617c7907ce2419f8d00d75e2',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/html-sanitizer' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'eae9b0a9ad7a2ed1963f819547d59ff99ad9e0fd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/html-sanitizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => 'e0ad0d153e1c20069250986cd9e9dd1ccebb0d66',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => '161e16fd2e35fb4881a43bc8b383dfd5be4ac374',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '7b03d9be1dea29bfec0a6c7b603f5072a4c97435',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '7b5d2121858cd6efbed778abce9cfdd7ab1f62ad',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'a10f19f5198d589d5c33333cffe98dc9820332dd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-iconv' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '927013f3aac555983a5059aada98e1907d842695',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-iconv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '508c652ba3ccf69f8c97f251534f229791b52a57',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '8741e3ed7fe2e91ec099e02446fb86667a0f1628',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => 'd37ad1779c38b8eb71996d17dc13030dcb7f9cf5',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '40da9cc13ec349d9e4966ce18b5fbcd724ab10a4',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'fc47f1015ec80927ff64ba9094dfe8b9d48fe9f2',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'f2e190ee75ff0f5eced645ec0be5c66fac81f51f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'f72b2cba8f79dd9d536f534f76874b58ad37876f',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '02c24deb352fb0d79db5486c0c79905a85e37e86',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '01b0f20b1351d997711c56f1638f7a8c3061e384',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => 'c81268d6960ddb47af17391a27d222bd58cf0515',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'a9a8337aa641ef2aa39c3e028f9107ec391e5927',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.7.3',
          'version' => '0.7.3.0',
          'reference' => '90b2e1d53b2c09b6371f84476699b69b36e378fd',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => '2.2.6',
          'version' => '2.2.6.0',
          'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.5.0',
          'version' => '5.5.0.0',
          'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zbateson/mail-mime-parser' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '20b3e48eb799537683780bc8782fbbe9bc25934a',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../zbateson/mail-mime-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zbateson/mb-wrapper' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'faf35dddfacfc5d4d5f9210143eafd7a7fe74334',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../zbateson/mb-wrapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zbateson/stream-decorators' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '783b034024fda8eafa19675fb2552f8654d3a3e9',
          'type' => 'library',
          'install_path' => '/Users/ewilan/Workspace/breeze/vendor/composer/../zbateson/stream-decorators',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/ewilan/Workspace/breeze/vendor/nunomaduro/larastan/bootstrap.php' => '83df8de2ac49123d1901c7429060f745055290db',
    'phar:///Users/ewilan/Workspace/breeze/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///Users/ewilan/Workspace/breeze/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/ewilan/Workspace/breeze/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/ewilan/Workspace/breeze/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'PDO_ODBC',
    4 => 'Phar',
    5 => 'Reflection',
    6 => 'SPL',
    7 => 'SimpleXML',
    8 => 'Zend OPcache',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dba',
    16 => 'dom',
    17 => 'exif',
    18 => 'fileinfo',
    19 => 'filter',
    20 => 'ftp',
    21 => 'gd',
    22 => 'gettext',
    23 => 'gmp',
    24 => 'hash',
    25 => 'iconv',
    26 => 'imagick',
    27 => 'intl',
    28 => 'json',
    29 => 'ldap',
    30 => 'libxml',
    31 => 'mbstring',
    32 => 'mysqli',
    33 => 'mysqlnd',
    34 => 'odbc',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcov',
    38 => 'pcre',
    39 => 'pdo_dblib',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'pspell',
    47 => 'random',
    48 => 'readline',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tidy',
    61 => 'tokenizer',
    62 => 'xml',
    63 => 'xmlreader',
    64 => 'xmlwriter',
    65 => 'xsl',
    66 => 'zip',
    67 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'collectedDataCallback' => static function (): array { return array (
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.login',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.confirm-password',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.verify-email',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.reset-password',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/NewPasswordController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.forgot-password',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordResetLinkController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.register',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.logs.show',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.index',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'profile.edit',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.projects.index',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.projects.create',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    2 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.projects.show',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
    3 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'pages.projects.edit',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'livewire.log.listing',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Project/Table.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'livewire.project.table',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Livewire/Project/Table.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'auth.login',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/App.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'layouts.app',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/View/Components/App.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Button.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'components.button',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/View/Components/Button.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'components.table.index',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/View/Components/Table.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Cell.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'components.table.cell',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Cell.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Row.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'components.table.row',
       'filePath' => '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Row.php',
       'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
    )),
  ),
); },
	'dependencies' => array (
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    'fileHash' => '97878c0188e1ee191be645426685d9c359103637',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/PasswordValidationRules.php' => 
  array (
    'fileHash' => '421e19ef37982521769584b558c767b23e52b17e',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/CreateNewUser.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserPassword.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    'fileHash' => '2bf397c872ba96d1501f16b81ce3f6258157ff60',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserPassword.php' => 
  array (
    'fileHash' => 'bb1b95774b5a0f30d4fdc29e67ccf4fcecd41fda',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserProfileInformation.php' => 
  array (
    'fileHash' => 'b799f0708b7d8102c94d0667fa4932b5a6aa8e7c',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Console/Commands/SentinelTokenCommand.php' => 
  array (
    'fileHash' => '758b3c0fbc6e97dd4de501420128da193216b2d7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Console/Kernel.php' => 
  array (
    'fileHash' => '7762951222b8c365bbfcd10db5f2c08e39ff8142',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Enums/ProjectPriorityEnum.php' => 
  array (
    'fileHash' => '2a95e5f43023f70663b863c71c5c82728b0aef4c',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Models/Project.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Enums/ProjectTypeEnum.php' => 
  array (
    'fileHash' => '8320b83b94488df12a98e20c7f3394b8b1cd3348',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Models/Project.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Exceptions/Handler.php' => 
  array (
    'fileHash' => 'fe00c651cc3178876f5a61e05d595da4b8210c0c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php' => 
  array (
    'fileHash' => '4501c8bff1205c634bf0abd8de36ef0521ec8da6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    'fileHash' => '5372c96b7d95b5b855a4ca24f5622a4b7d38a081',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    'fileHash' => 'e8e700caad9aab2fb487628afea8d0bc524c5e23',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    'fileHash' => 'c28fb7c9a0a0d6c2910684fcc4654aae608f897c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    'fileHash' => '7dd4274b3bc757de4ba092706425307926c58d2b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    'fileHash' => 'd2385fb5e062fe55d453e01c3410ec06629bab2c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    'fileHash' => '155d64155609df7f8b323a8b1f17322b6abdcdbb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    'fileHash' => '3101af4ec16e6b277c1952d1019ee578be571f86',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    'fileHash' => '568c819389e0776f588d8bed0977087611ecc012',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'fileHash' => '8cdfc90ea0d557aa61f623af549bf956f8286504',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '5cc336f1914d53076913e1866da3344eba448202',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      4 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      5 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/NewPasswordController.php',
      6 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordController.php',
      7 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordResetLinkController.php',
      8 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php',
      9 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/VerifyEmailController.php',
      10 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php',
      11 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php',
      12 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php',
      13 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php' => 
  array (
    'fileHash' => '856049a669ae07709bad4ddac0e2cdb7b7a5be96',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php' => 
  array (
    'fileHash' => 'c59c78be9d4472cc5ca4a7e659a90e205fab9a87',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php' => 
  array (
    'fileHash' => 'ca4ff8832cf9fc0e922be7f8af5cc8fc7fc5017f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php' => 
  array (
    'fileHash' => 'b7d4ddc7157aa5fe8203e47c478c0dd939c6c1e1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php' => 
  array (
    'fileHash' => 'f9b34fdbcbfcc43b6f7bee0af39809fa5c91a7dd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/Authenticate.php' => 
  array (
    'fileHash' => 'aa7a909ab8e4a8d509f2cecfe890fd7f19df8938',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/EncryptCookies.php' => 
  array (
    'fileHash' => 'fcbbfaae9d7ac781cd043ee7ce2ee66800d075ee',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    'fileHash' => '3f1cc28f08b8a3a8bbd1495e187fc197110cdab1',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    'fileHash' => '22865d62613f580ef172e96566cf7b7221117c3d',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrimStrings.php' => 
  array (
    'fileHash' => 'fdae9e792d68b2827446435ff17d6848726a1e81',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrustHosts.php' => 
  array (
    'fileHash' => '67a8483c3620b6cd2c6354e8282fb08a98feb608',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrustProxies.php' => 
  array (
    'fileHash' => '4c915478c380e43a2889f66130fe95f9b90ca5f0',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/ValidateSignature.php' => 
  array (
    'fileHash' => 'ef66937ccd20e6a189479dcc98e564cc72d4c92c',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    'fileHash' => 'f40416cadebf79cecb5ffaa1d7bed8d360f8addd',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    'fileHash' => '6776948fe2a9dd7a7d90189358ee1f7fb2d72f23',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/LogCreateRequest.php' => 
  array (
    'fileHash' => 'ae04b1919d2b6a38e6784643d1d53a65c6f7a43e',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '4a1b16e4adc7bff8e3c8a35003257dc700a880b2',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Jobs/LogProcess.php' => 
  array (
    'fileHash' => '9d52cacbb5e8b0d5d375638ad259b2309d5f2683',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php' => 
  array (
    'fileHash' => 'f60c844fe4c6ea92b7f89c01660b9f6aa624da08',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Project/Table.php' => 
  array (
    'fileHash' => 'fe38fe73dfc14d7623254cde0fbb973062c43cb4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Log.php' => 
  array (
    'fileHash' => '3cfa70636c2370d240a2ca9c2ede0385f75afa1e',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Controller.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Jobs/LogProcess.php',
      4 => '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php',
      5 => '/Users/ewilan/Workspace/breeze/app/Models/Project.php',
      6 => '/Users/ewilan/Workspace/breeze/app/Models/Trace.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Project.php' => 
  array (
    'fileHash' => '7ab6ce1f48bc1f84211bb102eb6199995f7af716',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Console/Commands/SentinelTokenCommand.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Controller.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php',
      4 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
      5 => '/Users/ewilan/Workspace/breeze/app/Jobs/LogProcess.php',
      6 => '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php',
      7 => '/Users/ewilan/Workspace/breeze/app/Livewire/Project/Table.php',
      8 => '/Users/ewilan/Workspace/breeze/app/Models/Log.php',
      9 => '/Users/ewilan/Workspace/breeze/app/Observers/ProjectObserver.php',
      10 => '/Users/ewilan/Workspace/breeze/app/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Trace.php' => 
  array (
    'fileHash' => '4b62e3127abfef29130487ca012bd60bbd488e35',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Models/Log.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/User.php' => 
  array (
    'fileHash' => '5eac4ff041f949f04b0492af499f384a7e4a9ca6',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/CreateNewUser.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/ResetUserPassword.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserPassword.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserProfileInformation.php',
      4 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      5 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      6 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      7 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordController.php',
      8 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php',
      9 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/VerifyEmailController.php',
      10 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php',
      11 => '/Users/ewilan/Workspace/breeze/app/Http/Requests/ProfileUpdateRequest.php',
      12 => '/Users/ewilan/Workspace/breeze/app/Providers/RouteServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Notifications/SlackAlert.php' => 
  array (
    'fileHash' => '0912f0f58c0bb4f865ab93573f7865199a117333',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Jobs/LogProcess.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Observers/ProjectObserver.php' => 
  array (
    'fileHash' => '6ed7eaf8ce45086d66bc887ac9a13ca0a3e459ed',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '39f22decebfaa515ff57e8ae419c3faa75de0b37',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/AuthServiceProvider.php' => 
  array (
    'fileHash' => '494bb0a4861384d9ba08f6b49d67830d54e54284',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/BroadcastServiceProvider.php' => 
  array (
    'fileHash' => '65964eb912591e8f2a962d7f2930702f3223f9be',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => 'ebd436cb84ab83983c886d1f9c6e1d270e872801',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php' => 
  array (
    'fileHash' => 'cd8adb99f9655eb1b9a677e9202d1b55169118da',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => '530371181d91a03efd74681fd2763df6ca57a7eb',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      3 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      4 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php',
      5 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/VerifyEmailController.php',
      6 => '/Users/ewilan/Workspace/breeze/app/Http/Middleware/RedirectIfAuthenticated.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/TelescopeServiceProvider.php' => 
  array (
    'fileHash' => 'ecb8b5fd31bf571ac2cff4cfaf0485fe2ed00aea',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/VoltServiceProvider.php' => 
  array (
    'fileHash' => '510f73b2317a268f902af535e19d2b5c8e566958',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/Services/PageService.php' => 
  array (
    'fileHash' => '35f89c941a0d144a38b201e5da63649b8bbaab94',
    'dependentFiles' => 
    array (
      0 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php',
      1 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php',
      2 => '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php',
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/App.php' => 
  array (
    'fileHash' => '23a65539588ce7103bc07b324a498805bd1d31e2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Button.php' => 
  array (
    'fileHash' => '4346d73169e80dde813f3dc06926d05a93f5ae3a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table.php' => 
  array (
    'fileHash' => 'c133a6bfbb33b4d1a8146f9c2a3fe28409ef8339',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Cell.php' => 
  array (
    'fileHash' => '92984d0974fd5f7225944c8226624d6d8ff37feb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Row.php' => 
  array (
    'fileHash' => '4dc66e1c292273fd6e00abc847b947523f47fbe4',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/CreateNewUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\CreateNewUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'rule' => 'Illuminate\\Validation\\Rule',
              'createsnewusers' => 'Laravel\\Fortify\\Contracts\\CreatesNewUsers',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/PasswordValidationRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Actions\\Fortify\\PasswordValidationRules',
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/ResetUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\ResetUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and reset the user\'s forgotten password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'resetsuserpasswords' => 'Laravel\\Fortify\\Contracts\\ResetsUserPasswords',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserPassword.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\UpdateUserPassword',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\UpdatesUserPasswords',
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Actions\\Fortify\\PasswordValidationRules',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and update the user\'s password.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'updatesuserpasswords' => 'Laravel\\Fortify\\Contracts\\UpdatesUserPasswords',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Actions/Fortify/UpdateUserProfileInformation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validate and update the given user\'s profile information.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'rule' => 'Illuminate\\Validation\\Rule',
              'updatesuserprofileinformation' => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateVerifiedUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the given verified user\'s profile information.
     *
     * @param  array<string, string>  $input
     */',
             'namespace' => 'App\\Actions\\Fortify',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
              'rule' => 'Illuminate\\Validation\\Rule',
              'updatesuserprofileinformation' => 'Laravel\\Fortify\\Contracts\\UpdatesUserProfileInformation',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Console/Commands/SentinelTokenCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\SentinelTokenCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Console/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the application\'s command schedule.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedule',
               'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'commands',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the commands for the application.
     */',
             'namespace' => 'App\\Console',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Enums/ProjectPriorityEnum.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\ProjectPriorityEnum',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'high',
           'value' => '\'high\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'medium',
           'value' => '\'medium\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'low',
           'value' => '\'low\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Enums/ProjectTypeEnum.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enums\\ProjectTypeEnum',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'laravel',
           'value' => '\'laravel\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'php',
           'value' => '\'php\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'nodejs',
           'value' => '\'nodejs\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Exceptions/Handler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dontFlash',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     */',
             'namespace' => 'App\\Exceptions',
             'uses' => 
            array (
              'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Api/LogController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\LogController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\LogCreateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Post',
               'args' => 
              array (
                0 => '\'/\'',
                'name' => '\'api.logs.create\'',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Prefix',
           'args' => 
          array (
            0 => '\'api/logs\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the login view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming authentication request.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy an authenticated session.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the confirm password view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Confirm the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a new email verification notification.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the email verification prompt.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse|Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming new password request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset link request view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming password reset link request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the registration view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming registration request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'verified' => 'Illuminate\\Auth\\Events\\Verified',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        1 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/LogController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\LogController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'log',
               'type' => 'App\\Models\\Log',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/{log_id}\'',
                'name' => '\'logs.show\'',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Prefix',
           'args' => 
          array (
            0 => '\'projects/{project_slug}/logs\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Middleware',
           'args' => 
          array (
            0 => '\'auth\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/NavigationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\NavigationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'welcome',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/\'',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Middleware',
           'args' => 
          array (
            0 => '\'auth\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the user\'s profile form.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s profile information.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the user\'s account.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Controllers/ProjectController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ProjectController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/\'',
                'name' => '\'projects.index\'',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/create\'',
                'name' => '\'projects.create\'',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/{project_slug}\'',
                'name' => '\'projects.show\'',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Spatie\\RouteAttributes\\Attributes\\Get',
               'args' => 
              array (
                0 => '\'/{project_slug}/edit\'',
                'name' => '\'projects.edit\'',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Prefix',
           'args' => 
          array (
            0 => '\'projects\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Spatie\\RouteAttributes\\Attributes\\Middleware',
           'args' => 
          array (
            0 => '\'auth\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middleware',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareGroups',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'middlewareAliases',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The application\'s middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */',
             'namespace' => 'App\\Http',
             'uses' => 
            array (
              'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/Authenticate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\Authenticate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redirectTo',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Auth\\Middleware\\Authenticate',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/EncryptCookies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EncryptCookies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/RedirectIfAuthenticated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'guards',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrimStrings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrimStrings',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrustHosts.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustHosts',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hosts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/TrustProxies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\TrustProxies',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'proxies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/ValidateSignature.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ValidateSignature',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Middleware/VerifyCsrfToken.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'except',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\Rule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempt to authenticate the request\'s credentials.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ensureIsNotRateLimited',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Ensure the login request is not rate limited.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'throttleKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the rate limiting throttle key for the request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/LogCreateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\LogCreateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\Rule|array|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Jobs/LogProcess.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\LogProcess',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new job instance.
     */',
             'namespace' => 'App\\Jobs',
             'uses' => 
            array (
              'log' => 'App\\Models\\Log',
              'project' => 'App\\Models\\Project',
              'slackalert' => 'App\\Notifications\\SlackAlert',
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'dispatchable' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
              'notification' => 'Illuminate\\Support\\Facades\\Notification',
              'discordalert' => 'Spatie\\DiscordAlerts\\Facades\\DiscordAlert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the job.
     */',
             'namespace' => 'App\\Jobs',
             'uses' => 
            array (
              'log' => 'App\\Models\\Log',
              'project' => 'App\\Models\\Project',
              'slackalert' => 'App\\Notifications\\SlackAlert',
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'dispatchable' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
              'notification' => 'Illuminate\\Support\\Facades\\Notification',
              'discordalert' => 'Spatie\\DiscordAlerts\\Facades\\DiscordAlert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Log/Listing.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Log\\Listing',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
        1 => 'Kiwilan\\Steward\\Livewire\\Traits\\LiveListing',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'project',
          ),
           'phpDoc' => NULL,
           'type' => 'App\\Models\\Project',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'models',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var Collection<int, Log>
     */',
             'namespace' => 'App\\Livewire\\Log',
             'uses' => 
            array (
              'log' => 'App\\Models\\Log',
              'project' => 'App\\Models\\Project',
              'collection' => 'Illuminate\\Support\\Collection',
              'livelisting' => 'Kiwilan\\Steward\\Livewire\\Traits\\LiveListing',
              'component' => 'Livewire\\Component',
              'withpagination' => 'Livewire\\WithPagination',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'Illuminate\\Support\\Collection',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queryString',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filter',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'model',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultSort',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sortable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Livewire/Project/Table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Livewire\\Project\\Table',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Livewire\\WithPagination',
        1 => 'Kiwilan\\Steward\\Livewire\\Traits\\LiveListing',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headers',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'models',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var Collection<int, Project>
     */',
             'namespace' => 'App\\Livewire\\Project',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'collection' => 'Illuminate\\Support\\Collection',
              'livelisting' => 'Kiwilan\\Steward\\Livewire\\Traits\\LiveListing',
              'on' => 'Livewire\\Attributes\\On',
              'component' => 'Livewire\\Component',
              'withpagination' => 'Livewire\\WithPagination',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'Illuminate\\Support\\Collection',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queryString',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filter',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sort',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'field',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Livewire\\Attributes\\On',
               'args' => 
              array (
                0 => '\'table-sort\'',
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'model',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'relations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'defaultSort',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sortable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Log.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Log',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Kiwilan\\Steward\\Traits\\LiveModelQueryable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sortable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveReport',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveTrace',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'trace',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findSameErrors',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Collection<int, Log>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'datetimezone' => 'DateTimeZone',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'collection' => 'Illuminate\\Support\\Collection',
              'sortmodule' => 'Kiwilan\\Steward\\Services\\Query\\SortModule',
              'livemodelqueryable' => 'Kiwilan\\Steward\\Traits\\LiveModelQueryable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMainTraceAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Models\\Trace',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFromDateTimeAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'project',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'traces',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Project.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Project',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Kiwilan\\Steward\\Traits\\LiveModelQueryable',
        2 => 'Kiwilan\\Steward\\Traits\\HasSlug',
        3 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sortable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'randomUuid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'regenerateToken',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'routeNotificationForSlack',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notification',
               'type' => 'Illuminate\\Notifications\\Notification',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/Trace.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Trace',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getArgsToStringAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMainFileAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMainClassAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'flatArgs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'args',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'index',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'log',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Notifications/SlackAlert.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Notifications\\SlackAlert',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Notifications\\Notification',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new notification instance.
     */',
             'namespace' => 'App\\Notifications',
             'uses' => 
            array (
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'mailmessage' => 'Illuminate\\Notifications\\Messages\\MailMessage',
              'slackmessage' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
              'notification' => 'Illuminate\\Notifications\\Notification',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'via',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the notification\'s delivery channels.
     *
     * @return array<int, string>
     */',
             'namespace' => 'App\\Notifications',
             'uses' => 
            array (
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'mailmessage' => 'Illuminate\\Notifications\\Messages\\MailMessage',
              'slackmessage' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
              'notification' => 'Illuminate\\Notifications\\Notification',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toMail',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the mail representation of the notification.
     */',
             'namespace' => 'App\\Notifications',
             'uses' => 
            array (
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'mailmessage' => 'Illuminate\\Notifications\\Messages\\MailMessage',
              'slackmessage' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
              'notification' => 'Illuminate\\Notifications\\Notification',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Notifications',
             'uses' => 
            array (
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'mailmessage' => 'Illuminate\\Notifications\\Messages\\MailMessage',
              'slackmessage' => 'Illuminate\\Notifications\\Messages\\SlackMessage',
              'notification' => 'Illuminate\\Notifications\\Notification',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Observers/ProjectObserver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Observers\\ProjectObserver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'creating',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'project',
               'type' => 'App\\Models\\Project',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'navigationitem' => 'Kiwilan\\Steward\\Utils\\NavigationItem',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'navigationitem' => 'Kiwilan\\Steward\\Utils\\NavigationItem',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any authentication / authorization services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/BroadcastServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\BroadcastServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'projectobserver' => 'App\\Observers\\ProjectObserver',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any events for your application.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'projectobserver' => 'App\\Observers\\ProjectObserver',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shouldDiscoverEvents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if events and listeners should be automatically discovered.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'project' => 'App\\Models\\Project',
              'projectobserver' => 'App\\Observers\\ProjectObserver',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'event' => 'Illuminate\\Support\\Facades\\Event',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/FortifyServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\FortifyServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'updateuserpassword' => 'App\\Actions\\Fortify\\UpdateUserPassword',
              'updateuserprofileinformation' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'createnewuser' => 'App\\Actions\\Fortify\\CreateNewUser',
              'resetuserpassword' => 'App\\Actions\\Fortify\\ResetUserPassword',
              'updateuserpassword' => 'App\\Actions\\Fortify\\UpdateUserPassword',
              'updateuserprofileinformation' => 'App\\Actions\\Fortify\\UpdateUserProfileInformation',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'str' => 'Illuminate\\Support\\Str',
              'fortify' => 'Laravel\\Fortify\\Fortify',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOME',
               'value' => '\'/dashboard\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to your application\'s "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'request' => 'Illuminate\\Http\\Request',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/TelescopeServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TelescopeServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hideSensitiveRequestDetails',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Prevent sensitive request details from being logged by Telescope.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Providers/VoltServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\VoltServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'volt' => 'Livewire\\Volt\\Volt',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'volt' => 'Livewire\\Volt\\Volt',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/Services/PageService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\PageService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'meta',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'breadcrumb',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, string>  $links
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'seotools' => 'Artesaos\\SEOTools\\Facades\\SEOTools',
              'view' => 'Illuminate\\Support\\Facades\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'links',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/App.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\App',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Button.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\Button',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'color',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'align',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'href',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'external',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'icon',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'iconSize',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'full',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'disabled',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'outlined',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'loading',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'loadingWire',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\Table',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     *
     * @param  string[]  $headers
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'subtitle',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'withActions',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'empty',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\View\\View|Closure|string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Cell.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\Table\\Cell',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     */',
             'namespace' => 'App\\View\\Components\\Table',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'primary',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mono',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'full',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tooltip',
               'type' => 'string|false',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'boolean',
               'type' => '?bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tooltipLimit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'responsive',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'colspan',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'App\\View\\Components\\Table',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\View\\View|Closure|string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ewilan/Workspace/breeze/app/View/Components/Table/Row.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\Table\\Row',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     */',
             'namespace' => 'App\\View\\Components\\Table',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'href',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'App\\View\\Components\\Table',
             'uses' => 
            array (
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\View\\View|Closure|string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
