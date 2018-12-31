<?php

namespace TCG\Voyager\FormFields;

class MultipleFilesHandler extends AbstractHandler
{
    protected $codename = 'multiple_files';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.multiple_files', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
