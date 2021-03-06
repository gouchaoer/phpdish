<?php

namespace PHPDish\Component\Media\Uploader;

use PHPDish\Component\Media\Manager\FileFactoryInterface;
use PHPDish\Component\Media\Manager\FileManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader implements FileUploaderInterface
{
    /**
     * @var FileFactoryInterface
     */
    protected $fileFactory;

    /**
     * @var FileManagerInterface
     */
    protected $fileManager;

    public function __construct(FileFactoryInterface $fileFactory, FileManagerInterface $fileManager)
    {
        $this->fileFactory = $fileFactory;
        $this->fileManager = $fileManager;
    }

    /**
     * {@inheritdoc}
     */
    public function upload(UploadedFile $uploadedFile)
    {
        $file = $this->fileFactory->createFileFromUploadedFile($uploadedFile);
        $this->fileManager->upload($file, true);

        return $file;
    }
}
