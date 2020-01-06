<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Core;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;
use Doctrine\ORM\Mapping\ClassMetadata; // @codingStandardsIgnoreLine

/** @var $metadata ClassMetadata */ // @codingStandardsIgnoreLine
$builder = new ClassMetadataBuilder($metadata);

$builder->setTable('tags')
        ->setCustomRepositoryClass(Repository\TagRepository::class);

$builder->createField('id', Types::BIGINT)
        ->columnName('id')
        ->makePrimaryKey()
        ->generatedValue('IDENTITY')
        ->option('unsigned', true)
        ->build();

$builder->createField('name', Types::STRING)
        ->unique()
        ->build();
