<?php

namespace Symfony\Cmf\Bundle\MediaBundle\Editor;

use Symfony\Cmf\Bundle\MediaBundle\FileInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Interface used as helper to handle file uploads and the specific response
 * needed for each editor, may this be json, javascript or something else.
 */
interface UploadEditorHelperInterface
{
    /**
     * Set file defaults from request
     *
     * @param Request $request
     * @param FileInterface $file
     */
    public function setFileDefaults(Request $request, FileInterface $file);

    /**
     * Get a response for the upload action of the editor
     *
     * @return Response
     */
    public function getUploadResponse(Request $request, FileInterface $file);
}