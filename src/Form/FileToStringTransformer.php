<?php

namespace App\Form;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;

class FileToStringTransformer implements DataTransformerInterface
{
    private $uploadDirectory;

    public function __construct(string $uploadDirectory)
    {
        $this->uploadDirectory = $uploadDirectory;
    }

    public function transform($file)
    {
        if (null === $file) {
            return '';
        }

        if (!$file instanceof File) {
            throw new TransformationFailedException('Expected a File object.');
        }

        return $file->getFilename();
    }

    public function reverseTransform($filename)
    {
        if (empty($filename)) {
            return null;
        }

        $absoluteFilePath = $this->uploadDirectory . '/' . $filename;

        return new File($absoluteFilePath);
    }
}
