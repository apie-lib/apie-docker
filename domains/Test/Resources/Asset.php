<?php

namespace Domains\Test\Resources;

use Apie\Core\Attributes\AllowMultipart;
use Apie\Core\Entities\EntityInterface;
use Apie\Core\FileStorage\StoredFile;
use Apie\Core\Lists\IntegerHashmap;
use Apie\Core\Lists\StringSet;
use Apie\Core\ValueObjects\NonEmptyString;
use Domains\Test\Identifiers\AssetIdentifier;
use Psr\Http\Message\UploadedFileInterface;

#[AllowMultipart]
class Asset implements EntityInterface
{
    public function __construct(
        private AssetIdentifier $id,
        private StoredFile $file,
        public StringSet $additionalSearchWords
    ) {
    }

    public function getId(): AssetIdentifier
    {
        return $this->id;
    }

    public function getName(): NonEmptyString
    {
        return NonEmptyString::fromNative($this->file->getClientFilename() ?? '???');
    }

    public function getFile(): StoredFile
    {
        return $this->file;
    }

    public function getAllWords(): IntegerHashmap
    {
        $list = array_fill_keys($this->additionalSearchWords->toArray(), 1);
        foreach ($this->file->getIndexing() as $searchTerm => $count) {
            $list[$searchTerm] = ($list[$searchTerm] ?? 0) + $count;
        }
        return new IntegerHashmap($list);
    }
}
